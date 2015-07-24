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

Route::get('/', function () { return view('welcome'); });

Route::get('home', 'StaticPageController@home');

Route::get('index', 'StaticPageController@index');

Route::get( 'contact',  'StaticPageController@contact' );

Route::get ('about', 'StaticPageController@about');

Route::get ('busfare', 'StaticPageController@busfare');

Route::get ('busschedule', 'StaticPageController@busschedule');

Route::get('/test', function () { return view('test'); });



Route::get('routes','RoutesController@busroutes');

Route::get('routes/create','RoutesController@create');

Route::get('routes/{id}','RoutesController@show');

Route::post('routes', 'RoutesController@store');


//
// Route::get('notifies','NotificationsController@index');

Route::get('notifies/create','NotificationsController@create');

Route::get('notifies/{id}','NotificationsController@show');

Route::post('notifies', 'NotificationsController@store');

//Route::get('notifies', 'NotificationsController@edit');

Route::resource('notifies', 'NotificationsController');



Route::controllers([
  "auth" => 'Auth\AuthController',
  "password" => 'Auth\PasswordController',
    ]);
