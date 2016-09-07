<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTeacherTable1 extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('teacher', function (Blueprint $table) {
			$table->string('email')->unique();
			$table->string('password');
		});
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('teacher', function (Blueprint $table) {
			$table->dropColumn('email');
			$table->dropColumn('password');
		});
	}
}
