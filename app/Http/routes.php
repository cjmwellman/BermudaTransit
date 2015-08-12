<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'StaticPageController@index');

Route::get ('busFare', 'StaticPageController@busFare');

Route::get ('busSchedule', 'StaticPageController@busschedule');

Route::get ('howToride', 'StaticPageController@howToride');

Route::get( 'contact',  'StaticPageController@contact' );

Route::get ('about', 'StaticPageController@about');

/////

Route::get('/test', function () { return view('test'); });

////

Route::get ('alerts','AlertsController@index');

Route::get ('alerts/create', 'AlertsController@create');

Route::get ('alerts/{id}','AlertsController@show');

Route::post ('alerts','AlertsController@store');

// Route::resource('alerts', 'AlertsController');


/////


Route::get ('schedule','ScheduleController@schedule');

Route::get ('timetable/{id}','ScheduleController@timetable');






Route::controllers([
  "auth" => 'Auth\AuthController',
  "password" => 'Auth\PasswordController',
    ]);
