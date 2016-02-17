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

Route::get('/','HomeController@index');

Route::resource('home', 'HomeController');


Route::get('admin/auth/login', ['uses' => 'Auth\AuthController@getLogin', 'as' => 'admin.auth.login']);
Route::post('admin/auth/login', ['uses' => 'Auth\AuthController@postLogin', 'as' => 'admin.auth.login']);
Route::get('admin/auth/logout', ['uses' => 'Auth\AuthController@getLogout', 'as' => 'admin.auth.logout']);



Route::group(['middleware' => 'auth'], function () {

    Route::resource('user','UserController');

    Route::resource('category','CategoryController');

	Route::resource('article','ArticleController');

	Route::resource('admin','AdminController');

	Route::resource('tag','TagController');
});