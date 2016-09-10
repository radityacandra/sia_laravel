<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateStudentReceiveSubject1 extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('student_receive_subject', function (Blueprint $table) {
			$table->string('grade');
			$table->string('semester');
		});
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('student_receive_subject', function (Blueprint $table) {
			$table->dropColumn('grade');
			$table->dropColumn('semester');
		});
	}
}
