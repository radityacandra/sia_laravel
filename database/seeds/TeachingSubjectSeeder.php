<?php

use Illuminate\Database\Seeder;
use App\Subject;
use App\Teacher;

use Faker\Factory;

class TeachingSubjectSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('teaching_subject')->delete();
		
		$teacherModel = new Teacher();
		$subjectModel = new Subject();
		
		$faker = Factory::create();
		
		$listTeacher = $teacherModel->select('NIP')
																->get()
																->toArray();
		
		$listSubject = $subjectModel->select('code_subject')
																->get();
		
		foreach ($listSubject as $subject){
			$nip = $faker->randomElement($listTeacher);
			$subjectModel->find($subject->code_subject)->teachedByTeacher()->attach($nip['NIP'], [
					'created_at'  => \Carbon\Carbon::now(),
					'updated_at'  => \Carbon\Carbon::now()
			]);
		}
	}
}
