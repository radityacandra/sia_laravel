<?php

use Illuminate\Database\Seeder;
use App\Teacher;
use Faker\Factory;

class TeacherSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Factory::create();
		
		for($i = 0; $i<50; $i++){
			$teacherModel = new Teacher();
			$teacherModel->NIP = $faker->numberBetween(1000000000, 2147483647);
			$teacherModel->created_at = \Carbon\Carbon::now();
			$teacherModel->updated_at = \Carbon\Carbon::now();
			$teacherModel->full_name = $faker->name;
			$teacherModel->joined_at = \Carbon\Carbon::create($faker->numberBetween(2010, 2015), $faker->numberBetween(1,12), $faker->numberBetween(1,28));
			$teacherModel->teacher_phone = $faker->phoneNumber;
			$teacherModel->teacher_picture = $faker->imageUrl(300, 400, 'people', true);
			$teacherModel->father_name = $faker->name;
			$teacherModel->mother_name = $faker->name;
			$teacherModel->parent_phone = $faker->phoneNumber;
			$teacherModel->email = $faker->email;
			$teacherModel->password = bcrypt($teacherModel->NIP);
			$teacherModel->save();
		}
	}
}
