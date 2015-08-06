<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('routes', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('number');
      $table->string('name');
      $table->string('detail');
      $table->timestamps();
    });
      Schema::create('weekday_times', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('route_id');
      $table->string('direction');
      $table->time('time');
      $table->string('note');
      $table->timestamps();
    });
      Schema::create('saturday_times', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('route_id');
      $table->string('direction');
      $table->time('time');
      $table->string('note');
      $table->timestamps();
    });
      Schema::create('sunday_times', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('route_id');
      $table->string('direction');
      $table->time('time');
      $table->string('note');
      $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('schedules');
    }
}
