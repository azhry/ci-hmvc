<?php 
// vendor/bin/codecept generate:cest acceptance CreateNewDataCest
// vendor/bin/codecept run acceptance CreateNewDataCest --steps

require 'vendor/autoload.php';


class CreateNewDataCest
{
	private $faker;

	public function _before(AcceptanceTester $I)
	{
		$this->faker = Faker\Factory::create();
	}

	public function CreateNewDataTest(AcceptanceTester $I)
	{
		$I->amOnPage('/admin/data/create');
		$I->see('Create New Data Form');

		// $I->scrollTo(['css' => '#submit-form']);
		// $I->wait(1);
		$I->click('#submit-form');

		// $data = [
		// 	[
		// 		'name'	=> 'Ridho',
		// 		'C1'	=> [
		// 			'type' 	=> 'option',
		// 			'value'	=> 40
		// 		],
		// 		'C2'	=> [
		// 			'type'	=> 'range',
		// 			'value'	=> 55
		// 		],
		// 		'C3'	=> [
		// 			'type'	=> 'option',
		// 			'value'	=> 30
		// 		],
		// 		'C4'	=> [
		// 			'type'	=> 'range',
		// 			'value'	=> 22
		// 		],
		// 		'C5'	=> [
		// 			'type'	=> 'experience',
		// 			'bulan'	=> 8,
		// 			'tahun'	=> 0
		// 		]
		// 	]
		// ];

		// foreach ($data as $row)
		// {
		// 	foreach ($row as $key => $value)
		// 	{
		// 		switch ($key)
		// 		{
		// 			case 'name':
		// 				$I->fillField('nama', $value);
		// 				break;

		// 			case 'C5':
		// 				$I->fillField('tahun', $value['tahun']);
		// 				$I->fillField('bulan', $value['bulan']);
		// 				break;

		// 			default:

		// 				switch ($value['type'])
		// 				{
		// 					case 'option':
		// 						$I->selectOption($key, $value['value']);
		// 						break;

		// 					case 'range':
		// 						$I->fillField($key, $value['value']);
		// 						break;
		// 				}

		// 				break;
		// 		}
		// 	}

		// 	$I->click('#submit-form');

		// 	$I->makeScreenshot();
		// 	$I->see('New data added');
		// }

	}
}
