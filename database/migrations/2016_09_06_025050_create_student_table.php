<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->string('NIM')->primary();
            $table->timestamps();
            $table->string('full_name');
            $table->timestamp('joined_at');
            $table->string('birth_place');
            $table->timestamp('birth_date');
            $table->string('father_name');
            $table->string('mother_name');
            $table->text('student_address');
            $table->text('parent_address');
            $table->string('student_phone');
            $table->string('parent_phone');
            $table->string('student_picture');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('student');
    }
}
