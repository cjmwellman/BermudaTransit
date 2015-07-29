<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimetableTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
{
  Schema::create('routes', function(Blueprint $table)
  {
    $table->increments('id');
    $table->string('name', 100);
    $table->string('description', 250);
    $table->timestamps();
  });

  Schema::create('timetable_weekday', function(Blueprint $table)
  {
    $table->increments('id');
    $table->timestamp('time');
    $table->string('direction', 50);
    $table->integer('route_id');
    $table->timestamps();
  });

  Schema::create('timetable_saturday', function(Blueprint $table)
  {
    $table->increments('id');
    $table->timestamp('time');
    $table->string('direction', 50);
    $table->integer('route_id');
    $table->timestamps();
  });

  Schema::create('timetable_sunday', function(Blueprint $table)
  {
    $table->increments('id');
    $table->timestamp('time');
    $table->string('direction', 50);
    $table->integer('route_id');
    $table->timestamps();
  });
}

  public function down()
  {
    Schema::drop('routes');
    Schema::drop('timetable_weekday');
    Schema::drop('timetable_saturday');
    Schema::drop('timetable_sunday');
  }
}
