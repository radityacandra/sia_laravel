<?php

use Illuminate\Database\Seeder;
use App\Student;
use App\ClassModel;
use Faker\Factory;

class StudentMemberClassSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$studentModel = new Student();
		$listStudent = $studentModel->get();
		
		$classModel = new ClassModel();
		$listClass = $classModel->get()->toArray();
		
		$faker = Factory::create();
		
		foreach($listStudent as $student){
			$studentModel->where('NIM', '=', $student->NIM)
									->update([
										'current_class' => $faker->randomElement($listClass)['class_id']
									]);
		}
	}
}
