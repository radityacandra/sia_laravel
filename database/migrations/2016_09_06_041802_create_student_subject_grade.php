<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentSubjectGrade extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_subject_grade', function (Blueprint $table) {
            $table->increments('subject_grade_id');
            $table->timestamps();
            $table->string('NIM');
            $table->string('code_subject');
            $table->integer('ulangan_1');
            $table->integer('ulangan_2');
            $table->integer('ulangan_3');
            $table->integer('UTS');
            $table->integer('UAS');
            $table->integer('remedial');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('student_subject_grade');
    }
}
