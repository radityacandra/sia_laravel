<?php

use Illuminate\Database\Seeder;
use App\Student;
use App\ClassModel;
use Faker\Factory;

class StudentReceiveSubjectSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('student_receive_subject')->delete();
		
		$studentModel = new Student();
		$listStudent = $studentModel->get();
		
		$faker=  Factory::create();
		
		foreach ($listStudent as $student){
			$class = $student->current_class;
			$classModel = new ClassModel();
			$class = $classModel->with('hasManySubjects')
													->find($class);
			
			foreach ($class->hasManySubjects as $subject){
				$studentModel = new Student();
				$studentModel->find($student->NIM)->receiveManySubject()->attach($subject->code_subject, [
						'created_at'  => \Carbon\Carbon::now(),
						'updated_at'  => \Carbon\Carbon::now(),
						'semester'    => 'Semester 1',
						'grade'       => $faker->numberBetween(65,100)
				]);
			}
		}
	}
}
