<?php

use Illuminate\Database\Seeder;
use App\Teacher;
use App\ClassModel;

use Faker\Factory;

class HometeacherSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$classModel = new ClassModel();
		$teacherModel = new Teacher();
		
		$faker = Factory::create();
		
		$listClass = $classModel->get();
		
		$listTeacher = $teacherModel->select('NIP')
																->get()
																->toArray();
		
		//reset first
		foreach ($listTeacher as $teacher){
			$teacherModel->where('NIP', '=', $teacher['NIP'])
										->update([
											'status'  => 'guru',
											'class_id'=> ''
										]);
		}
		
		//..and set later
		foreach ($listClass as $class){
			$teacher = $faker->randomElement($listTeacher);
			$key = array_search($teacher['NIP'], array_column($listTeacher, 'NIP'));
			array_splice($listTeacher, $key, 1);
			
			$teacherModel->where('NIP', '=', $teacher['NIP'])
										->update([
												'status'  => 'wali',
												'class_id'=> $class->class_id
										]);
		}
	}
}
