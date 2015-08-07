<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlertsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('alerts', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title');
          $table->text('body');
          $table->timestamps();
          $table->timestamp('post_at');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('alerts');
    }
}
