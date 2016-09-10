<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentReceiveSubject extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_receive_subject', function (Blueprint $table) {
			$table->increments('student_subject_id');
			$table->timestamps();
			$table->string('subject_id');
			$table->string('NIM');
		});
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('student_receive_subject');
	}
}
