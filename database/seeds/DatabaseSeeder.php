<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// $this->call(UsersTableSeeder::class);
		$this->call(ClassSeeder::class);
		$this->call(ConsentrationSeeder::class);
		$this->call(StudentSeeder::class);
		$this->call(SubjectSeeder::class);
		$this->call(TeacherSeeder::class);
		$this->call(StudentMemberClassSeeder::class);
	}
}
