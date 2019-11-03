<?php 

function generate_form($config) 
{
	$html = '';
	foreach ($config as $row)
	{
		$html .= '<div class="row">';
		$html .= '<div class="col-md-12">';
		$html .= '<div class="form-group">';
		$html .= '<label>' . $row->title . '</label>';

		$details = json_decode($row->details);
		switch ($row->type)
		{
			case 'option':
				$html .= '<select class="form-control" required name="' . $row->key . '">';
				foreach ($details as $detail)
				{
					$html .= '<option value="' . $detail->label . '">' . $detail->label . '</option>';
				}
				$html .= '</select>';
				break;

			case 'range':
				$html .= '<input type="number" name="' . $row->key . '" step="any" class="form-control">';
				break;
		}

		$html .= '</div>';
		$html .= '</div>';
		$html .= '</div>';
	}

	return $html;

} 