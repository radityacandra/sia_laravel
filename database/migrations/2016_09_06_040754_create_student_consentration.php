<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentConsentration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_consentration', function (Blueprint $table) {
            $table->increments('student_consentration_id');
            $table->timestamps();
            $table->string('NIM');
            $table->integer('consentration_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('student_consentration');
    }
}
