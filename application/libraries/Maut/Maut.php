<?php 

require_once __DIR__ .'/Criteria.php';

class Maut extends Criteria
{
	private $data;
	private $result;
	private $normalized_result;
	private $normalizer;
	private $weights;

	public function __construct($config = NULL, $verbose = false)
	{
		parent::__construct();
		$this->normalizer 	= [];
		$this->weights 		= [];
		if ($config != NULL)
		{
			$this->config = $this->fit_config($config);
		}

		foreach ($this->config as $key => $value)
		{
			$this->weights[$key] = $value['weight'];
		}
	}

	public function fit($data, $exclude_key = [])
	{
		$this->data = $data;
		$this->result = $this->fit_criteria($data, $exclude_key);
		foreach ($this->weights as $key => $value)
		{
			$col_values = array_column($this->result, $key);
			$this->normalizer[$key] = [
				'min' 	=> min($col_values),
				'max' 	=> max($col_values),
				'diff'	=> max($col_values) - min($col_values)
			];
		}
		return $this->result;
	}

	public function normalize($data = [])
	{
		if (count($data) > 0)
		{
			$fit = $data;
		}
		else
		{
			$fit = $this->result;
		}

		$this->normalized_result = array_map(function($row) {
			$result = [];
			foreach ($row as $key => $value)
			{
				$result[$key] = $this->normalizer[$key]['diff'] === 0 ? 0 : (($value - $this->normalizer[$key]['min']) / $this->normalizer[$key]['diff']);
			}
			return $result;
		}, $fit);
		return $this->normalized_result;
	}

	public function weightings()
	{
		$this->normalize();
		$this->weighted_result = array_map(function($row) {
			$result = [];
			foreach ($row as $key => $value)
			{
				$result[$key] = $value * $this->weights[$key];
			}
			return $result;
		}, $this->normalized_result);
		return $this->weighted_result;
	}

	private function sum_rows($data)
	{
		return array_map(function($row) {
			return array_sum(array_values($row));
		}, $data);
	}

	public function rank($raw_data = [], $order = 'DESC')
	{
		$result = $this->weighted_result;
		$data = $this->sum_rows($result);

		if (count($raw_data) <= 0)
		{
			$ranked_data = $result;
		}
		else
		{
			$ranked_data = $raw_data->toArray();
		}

		array_multisort($data, $order === 'DESC' ? SORT_DESC : SORT_ASC, $ranked_data);
		for ($i = 0; $i < count($ranked_data); $i++)
		{
			$ranked_data[$i]['total'] = $data[$i];
		}
		return $ranked_data;
	}
}