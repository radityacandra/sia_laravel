<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher', function (Blueprint $table) {
            $table->string('NIP')->primary();
            $table->timestamps();
            $table->string('full_name');
            $table->timestamp('joined_at');
            $table->string('teacher_phone');
            $table->string('teacher_picture');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('parent_phone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('teacher');
    }
}
