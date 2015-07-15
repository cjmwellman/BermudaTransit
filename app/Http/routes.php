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

Route::get( 'contact',  'StaticPageController@contact' );

Route::get ('about', 'StaticPageController@about');

Route::get('/test', function () { return view('test'); });

Route::controllers([
  "auth" => 'Auth\AuthController',
  "password" => 'Auth\PasswordController',
    ]);
