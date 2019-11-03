<?php 
/**
* Class for configuration setting which will be used.
*
* @package    Maut
* @author     Azhary Arliansyah
* @version    1.0
*/

class Config
{
	public static $config = [
			'biaya_sewa' => [
				'key'		=> 'biaya_sewa',
				'weight'	=> 5,
				'label'		=> 'Biaya Sewa',
				'type'		=> 'range',
				'values'	=> [
					[
						'label'	=> 'Sangat murah',
						'min'	=> null,
						'max'	=> 73000000,
						'value'	=> 5
					],
					[
						'label'	=> 'Murah',
						'min'	=> 73100000,
						'max'	=> 111100000,
						'value'	=> 4
					],
					[
						'label'	=> 'Standar',
						'min'	=> 111200000,
						'max'	=> 149200000,
						'value'	=> 3
					],
					[
						'label'	=> 'Mahal',
						'min'	=> 149300000,
						'max'	=> 187300000,
						'value'	=> 2
					],
					[
						'label'	=> 'Sangat mahal',
						'min'	=> 187400000,
						'max'	=> null,
						'value'	=> 1
					]
				]
			],
			'luas_bangunan' => [
				'key'		=> 'luas_bangunan',
				'weight'	=> 4,
				'label'		=> 'Luas Bangunan',
				'type'		=> 'range',
				'values'	=> [
					[
						'label'	=> '48 - 62',
						'min'	=> null,
						'max'	=> 62,
						'value'	=> 2
					],
					[
						'label'	=> '63 - 77',
						'min'	=> 63,
						'max'	=> 77,
						'value'	=> 3
					],
					[
						'label'	=> '78 - 92',
						'min'	=> 78,
						'max'	=> 92,
						'value'	=> 4
					],
					[
						'label'	=> '93 - 107',
						'min'	=> 93,
						'max'	=> 107,
						'value'	=> 1
					],
					[
						'label'	=> '108 - 122',
						'min'	=> 108,
						'max'	=> null,
						'value'	=> 5
					]
				]
			],
			'akses_menuju_lokasi' => [
				'key'		=> 'akses_menuju_lokasi',
				'weight'	=> 5,
				'label'		=> 'Akses Menuju Lokasi',
				'type'		=> 'option',
				'values'	=> [
					[
						'label'	=> 'Pejalan Kaki',
						'value'	=> 3
					],
					[
						'label'	=> 'Angkutan Umum',
						'value'	=> 1
					],
					[
						'label'	=> 'Kendaraan Mobil',
						'value'	=> 4
					],
					[
						'label'	=> 'Kendaraan Motor',
						'value'	=> 2
					],
					[
						'label'	=> 'Semuanya',
						'value'	=> 5
					]
				]
			],
			'pusat_keramaian' => [
				'key'		=> 'pusat_keramaian',
				'weight'	=> 5,
				'label'		=> 'Pusat Keramaian',
				'type'		=> 'option',
				'values'	=> [
					[
						'label'	=> 'Kantor',
						'value'	=> 4
					],
					[
						'label'	=> 'Mall',
						'value'	=> 3
					],
					[
						'label'	=> 'Pasar',
						'value'	=> 3
					],
					[
						'label'	=> 'Rumah Sakit',
						'value'	=> 2
					],
					[
						'label'	=> 'Sekolah',
						'value'	=> 5
					],
					[
						'label'	=> 'Kampus',
						'value'	=> 5
					],
					[
						'label'	=> 'Semuanya',
						'value'	=> 1
					]
				]
			],
			'zona_parkir' => [
				'key'		=> 'zona_parkir',
				'weight'	=> 5,
				'label'		=> 'Zona Parkir',
				'type'		=> 'range',
				'values'	=> [
					[
						'label'	=> '4 - 5,6 M',
						'min'	=> null,
						'max'	=> 5.6,
						'value'	=> 2
					],
					[
						'label'	=> '5,7 - 7,3 M',
						'min'	=> 5.7,
						'max'	=> 7.3,
						'value'	=> 5
					],
					[
						'label'	=> '7,4 - 9 M',
						'min'	=> 7.4,
						'max'	=> 9,
						'value'	=> 3
					],
					[
						'label'	=> '9,1 - 10,7 M',
						'min'	=> 9.1,
						'max'	=> 10.7,
						'value'	=> 1
					],
					[
						'label'	=> '10,8 - 12,4 M',
						'min'	=> 10.8,
						'max'	=> null,
						'value'	=> 4
					]
				]
			],
			'jumlah_pesaing_serupa' => [
				'key'		=> 'jumlah_pesaing_serupa',
				'weight'	=> 4,
				'label'		=> 'Jumlah Pesaing Serupa',
				'type'		=> 'range',
				'values'	=> [
					[
						'label'	=> 'Tidak Ada',
						'min'	=> null,
						'max'	=> 0,
						'value'	=> 4
					],
					[
						'label'	=> '1 - 2 pesaing',
						'min'	=> 1,
						'max'	=> 2,
						'value'	=> 5
					],
					[
						'label'	=> '3 - 4 pesaing',
						'min'	=> 3,
						'max'	=> 4,
						'value'	=> 2
					],
					[
						'label'	=> '5 - 6 pesaing',
						'min'	=> 5,
						'max'	=> 6,
						'value'	=> 1
					],
					[
						'label'	=> '> 6 pesaing',
						'min'	=> 7,
						'max'	=> null,
						'value'	=> 3
					]
				]
			],
			'tingkat_konsumtif_masyarakat' => [
				'key'		=> 'tingkat_konsumtif_masyarakat',
				'weight'	=> 5,
				'label'		=> 'Tingkat Konsumtif Masyarakat',
				'type'		=> 'option',
				'values'	=> [
					[
						'label'	=> 'Sangat Rendah',
						'value'	=> 1
					],
					[
						'label'	=> 'Rendah',
						'value'	=> 2
					],
					[
						'label'	=> 'Cukup Tinggi',
						'value'	=> 4
					],
					[
						'label'	=> 'Tinggi',
						'value'	=> 3
					],
					[
						'label'	=> 'Sangat Tinggi',
						'value'	=> 5
					]
				]
			],
			'lingkungan_lokasi_ruko' => [
				'key'		=> 'lingkungan_lokasi_ruko',
				'weight'	=> 5,
				'label'		=> 'Lingkungan Lokasi Ruko',
				'type'		=> 'option',
				'values'	=> [
					[
						'label'	=> 'Pertengahan Kota',
						'value'	=> 4
					],
					[
						'label'	=> 'Lingkungan Perkampungan',
						'value'	=> 1
					],
					[
						'label'	=> 'Lingkungan Perumahan',
						'value'	=> 3
					],
					[
						'label'	=> 'Jalan Raya Kota',
						'value'	=> 5
					],
					[
						'label'	=> 'Jalan Utama',
						'value'	=> 5
					],
					[
						'label'	=> 'Jalan Lintas Kota',
						'value'	=> 2
					]
				]
			]
		];
}
