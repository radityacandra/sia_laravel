<?php

use Illuminate\Database\Seeder;
use App\ClassModel;

class ClassSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$classModel = new ClassModel();
		
		$classModel->class_id = 'X1';
		$classModel->created_at = \Carbon\Carbon::now();
		$classModel->updated_at = \Carbon\Carbon::now();
		$classModel->class_name = 'X-1';
		$classModel->student_count = 32;
		$classModel->consentration_id = 0;
		$classModel->save();
		
		$classModel->class_id = 'X2';
		$classModel->created_at = \Carbon\Carbon::now();
		$classModel->updated_at = \Carbon\Carbon::now();
		$classModel->class_name = 'X-2';
		$classModel->student_count = 31;
		$classModel->consentration_id = 0;
		$classModel->save();
		
		$classModel->class_id = 'X3';
		$classModel->created_at = \Carbon\Carbon::now();
		$classModel->updated_at = \Carbon\Carbon::now();
		$classModel->class_name = 'X-3';
		$classModel->student_count = 35;
		$classModel->consentration_id = 0;
		$classModel->save();
		
		$classModel->class_id = 'X4';
		$classModel->created_at = \Carbon\Carbon::now();
		$classModel->updated_at = \Carbon\Carbon::now();
		$classModel->class_name = 'X-4';
		$classModel->student_count = 35;
		$classModel->consentration_id = 0;
		$classModel->save();
		
		$classModel->class_id = 'X5';
		$classModel->created_at = \Carbon\Carbon::now();
		$classModel->updated_at = \Carbon\Carbon::now();
		$classModel->class_name = 'X-5';
		$classModel->student_count = 38;
		$classModel->consentration_id = 0;
		$classModel->save();
		
		$classModel->class_id = 'X6';
		$classModel->created_at = \Carbon\Carbon::now();
		$classModel->updated_at = \Carbon\Carbon::now();
		$classModel->class_name = 'X-7';
		$classModel->student_count = 34;
		$classModel->consentration_id = 0;
		$classModel->save();
		
		$classModel->class_id = 'X7';
		$classModel->created_at = \Carbon\Carbon::now();
		$classModel->updated_at = \Carbon\Carbon::now();
		$classModel->class_name = 'X-7';
		$classModel->student_count = 33;
		$classModel->consentration_id = 0;
		$classModel->save();
		
		
		$classModel->class_id = 'X8';
		$classModel->created_at = \Carbon\Carbon::now();
		$classModel->updated_at = \Carbon\Carbon::now();
		$classModel->class_name = 'X-8';
		$classModel->student_count = 39;
		$classModel->consentration_id = 0;
		$classModel->save();
		
		$classModel->class_id = 'X9';
		$classModel->created_at = \Carbon\Carbon::now();
		$classModel->updated_at = \Carbon\Carbon::now();
		$classModel->class_name = 'X-9';
		$classModel->student_count = 32;
		$classModel->consentration_id = 0;
		$classModel->save();
		
		$classModel->class_id = 'X10';
		$classModel->created_at = \Carbon\Carbon::now();
		$classModel->updated_at = \Carbon\Carbon::now();
		$classModel->class_name = 'X-10';
		$classModel->student_count = 32;
		$classModel->consentration_id = 0;
		$classModel->save();
		
		$classModel->class_id = 'XIIA1';
		$classModel->created_at = \Carbon\Carbon::now();
		$classModel->updated_at = \Carbon\Carbon::now();
		$classModel->class_name = 'XI IA-1';
		$classModel->student_count = 35;
		$classModel->consentration_id = 1;
		$classModel->save();
		
		$classModel->class_id = 'XIIA2';
		$classModel->created_at = \Carbon\Carbon::now();
		$classModel->updated_at = \Carbon\Carbon::now();
		$classModel->class_name = 'XI IA-2';
		$classModel->student_count = 34;
		$classModel->consentration_id = 1;
		$classModel->save();
		
		$classModel->class_id = 'XIIA3';
		$classModel->created_at = \Carbon\Carbon::now();
		$classModel->updated_at = \Carbon\Carbon::now();
		$classModel->class_name = 'XI IA-3';
		$classModel->student_count = 36;
		$classModel->consentration_id = 1;
		$classModel->save();
		
		$classModel->class_id = 'XIIA4';
		$classModel->created_at = \Carbon\Carbon::now();
		$classModel->updated_at = \Carbon\Carbon::now();
		$classModel->class_name = 'XI IA-4';
		$classModel->student_count = 33;
		$classModel->consentration_id = 1;
		$classModel->save();
		
		$classModel->class_id = 'XIIA5';
		$classModel->created_at = \Carbon\Carbon::now();
		$classModel->updated_at = \Carbon\Carbon::now();
		$classModel->class_name = 'XI IA-5';
		$classModel->student_count = 34;
		$classModel->consentration_id = 1;
		$classModel->save();
		
		$classModel->class_id = 'XIIA6';
		$classModel->created_at = \Carbon\Carbon::now();
		$classModel->updated_at = \Carbon\Carbon::now();
		$classModel->class_name = 'XI IA-6';
		$classModel->student_count = 35;
		$classModel->consentration_id = 1;
		$classModel->save();
		
		$classModel->class_id = 'XIIS1';
		$classModel->created_at = \Carbon\Carbon::now();
		$classModel->updated_at = \Carbon\Carbon::now();
		$classModel->class_name = 'XI IS-1';
		$classModel->student_count = 33;
		$classModel->consentration_id = 2;
		$classModel->save();
		
		$classModel->class_id = 'XIIS2';
		$classModel->created_at = \Carbon\Carbon::now();
		$classModel->updated_at = \Carbon\Carbon::now();
		$classModel->class_name = 'XI IS-2';
		$classModel->student_count = 36;
		$classModel->consentration_id = 2;
		$classModel->save();
		
		$classModel->class_id = 'XIIS3';
		$classModel->created_at = \Carbon\Carbon::now();
		$classModel->updated_at = \Carbon\Carbon::now();
		$classModel->class_name = 'XI IS-3';
		$classModel->student_count = 33;
		$classModel->consentration_id = 2;
		$classModel->save();
		
		$classModel->class_id = 'XIIS4';
		$classModel->created_at = \Carbon\Carbon::now();
		$classModel->updated_at = \Carbon\Carbon::now();
		$classModel->class_name = 'XI IS-4';
		$classModel->student_count = 31;
		$classModel->consentration_id = 2;
		$classModel->save();
		
		$classModel->class_id = 'XIIB1';
		$classModel->created_at = \Carbon\Carbon::now();
		$classModel->updated_at = \Carbon\Carbon::now();
		$classModel->class_name = 'XI IB-1';
		$classModel->student_count = 23;
		$classModel->consentration_id = 3;
		$classModel->save();
		
		$classModel->class_id = 'XIIIA1';
		$classModel->created_at = \Carbon\Carbon::now();
		$classModel->updated_at = \Carbon\Carbon::now();
		$classModel->class_name = 'XII IA-1';
		$classModel->student_count = 35;
		$classModel->consentration_id = 1;
		$classModel->save();
		
		$classModel->class_id = 'XIIIA2';
		$classModel->created_at = \Carbon\Carbon::now();
		$classModel->updated_at = \Carbon\Carbon::now();
		$classModel->class_name = 'XII IA-2';
		$classModel->student_count = 34;
		$classModel->consentration_id = 1;
		$classModel->save();
		
		$classModel->class_id = 'XIIIA3';
		$classModel->created_at = \Carbon\Carbon::now();
		$classModel->updated_at = \Carbon\Carbon::now();
		$classModel->class_name = 'XII IA-3';
		$classModel->student_count = 36;
		$classModel->consentration_id = 1;
		$classModel->save();
		
		$classModel->class_id = 'XIIIA4';
		$classModel->created_at = \Carbon\Carbon::now();
		$classModel->updated_at = \Carbon\Carbon::now();
		$classModel->class_name = 'XII IA-4';
		$classModel->student_count = 33;
		$classModel->consentration_id = 1;
		$classModel->save();
		
		$classModel->class_id = 'XIIIA5';
		$classModel->created_at = \Carbon\Carbon::now();
		$classModel->updated_at = \Carbon\Carbon::now();
		$classModel->class_name = 'XII IA-5';
		$classModel->student_count = 34;
		$classModel->consentration_id = 1;
		$classModel->save();
		
		$classModel->class_id = 'XIIIA6';
		$classModel->created_at = \Carbon\Carbon::now();
		$classModel->updated_at = \Carbon\Carbon::now();
		$classModel->class_name = 'XII IA-6';
		$classModel->student_count = 35;
		$classModel->consentration_id = 1;
		$classModel->save();
		
		$classModel->class_id = 'XIIIS1';
		$classModel->created_at = \Carbon\Carbon::now();
		$classModel->updated_at = \Carbon\Carbon::now();
		$classModel->class_name = 'XII IS-1';
		$classModel->student_count = 33;
		$classModel->consentration_id = 2;
		$classModel->save();
		
		$classModel->class_id = 'XIIIS2';
		$classModel->created_at = \Carbon\Carbon::now();
		$classModel->updated_at = \Carbon\Carbon::now();
		$classModel->class_name = 'XII IS-2';
		$classModel->student_count = 36;
		$classModel->consentration_id = 2;
		$classModel->save();
		
		$classModel->class_id = 'XIIIS3';
		$classModel->created_at = \Carbon\Carbon::now();
		$classModel->updated_at = \Carbon\Carbon::now();
		$classModel->class_name = 'XI IS-3';
		$classModel->student_count = 33;
		$classModel->consentration_id = 2;
		$classModel->save();
		
		$classModel->class_id = 'XIIIS4';
		$classModel->created_at = \Carbon\Carbon::now();
		$classModel->updated_at = \Carbon\Carbon::now();
		$classModel->class_name = 'XII IS-4';
		$classModel->student_count = 31;
		$classModel->consentration_id = 2;
		$classModel->save();
		
		$classModel->class_id = 'XIIIB1';
		$classModel->created_at = \Carbon\Carbon::now();
		$classModel->updated_at = \Carbon\Carbon::now();
		$classModel->class_name = 'XII IB-1';
		$classModel->student_count = 23;
		$classModel->consentration_id = 3;
		$classModel->save();
	}
}
