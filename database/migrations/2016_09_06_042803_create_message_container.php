<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageContainer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_container', function (Blueprint $table) {
            $table->increments('message_container_id');
            $table->timestamps();
            $table->integer('message_id');
            $table->text('body');
            $table->string('role_table');
            $table->string('id_sender');
            $table->string('id_receiver');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('message_container');
    }
}
