<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTeacherTable2 extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('teacher', function (Blueprint $table) {
			$table->enum('status', ['guru', 'wali'])->default('guru');
			$table->string('class_id');
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
			$table->dropColumn('status');
			$table->dropColumn('class_id');
		});
	}
}
