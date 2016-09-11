<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachingSubject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teaching_subject', function (Blueprint $table) {
            $table->increments('teaching_subject_id');
            $table->timestamps();
            $table->string('NIP');
            $table->string('code_subject');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('teaching_subject');
    }
}
