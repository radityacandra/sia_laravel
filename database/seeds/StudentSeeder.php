<?php

use Illuminate\Database\Seeder;
use App\Student;
use Faker\Factory;

class StudentSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('student')->delete();
		$faker = Factory::create();
		
		for($i = 0; $i<500; $i++){
			$studentModel = new Student();
			$studentModel->NIM = $faker->numberBetween(300000, 400000);
			$studentModel->created_at = \Carbon\Carbon::now();
			$studentModel->updated_at = \Carbon\Carbon::now();
			$studentModel->full_name = $faker->name;
			$studentModel->joined_at = \Carbon\Carbon::create(2012, $faker->numberBetween(3,6), $faker->numberBetween(17, 25));
			$studentModel->birth_place = $faker->city;
			$studentModel->birth_date = \Carbon\Carbon::create($faker->numberBetween(1993,1996), $faker->numberBetween(1,12), $faker->numberBetween(1,28));
			$studentModel->father_name = $faker->name('male');
			$studentModel->mother_name = $faker->name('female');
			$studentModel->student_address =  $faker->address;
			if($faker->numberBetween(0,1)==0){
				$studentModel->parent_address = $faker->address;
			} else {
				$studentModel->parent_address = $studentModel->student_address;
			}
			$studentModel->student_phone = $faker->phoneNumber;
			$studentModel->parent_phone = $faker->phoneNumber;
			$studentModel->student_picture = $faker->imageUrl(300, 400, 'people', true);
			$studentModel->save();
		}
	}
}
