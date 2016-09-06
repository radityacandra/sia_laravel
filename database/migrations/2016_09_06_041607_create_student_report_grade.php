<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentReportGrade extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_report_grade', function (Blueprint $table) {
            $table->increments('report_grade_id');
            $table->timestamps();
            $table->string('NIM');
            $table->string('code_subject');
            $table->integer('grade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('student_report_grade');
    }
}
