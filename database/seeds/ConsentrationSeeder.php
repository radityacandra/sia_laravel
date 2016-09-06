<?php

use Illuminate\Database\Seeder;
use App\Consentration;

class ConsentrationSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$consentrationModel = new Consentration();
		
		$consentrationModel->consentration_name = 'Belum Konsentrasi';
		$consentrationModel->save();
		
		$consentrationModel->consentration_name = 'Ilmu Pengetahuan Alam';
		$consentrationModel->save();
		
		$consentrationModel->consentration_name = 'Ilmu Pengetahuan Sosial';
		$consentrationModel->save();
		
		$consentrationModel->consentration_name = 'Sastra dan Bahasa';
		$consentrationModel->save();
	}
}
