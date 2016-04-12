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

// Authentication routes...
Route::get('/', function() {
	return redirect()->route('auth.login');
});

Route::get('auth/login', [
	'as' => 'auth.login',
	'uses' => 'Auth\AuthController@getLogin',
]);
Route::post('auth/login', [
	'as' => 'auth.login',
	'uses' => 'Auth\AuthController@postLogin',
]);
Route::get('auth/register', [
		'as' => 'auth.register',
		'uses' => 'Auth\AuthController@getRegister',
]);
Route::post('auth/register', [
		'as' => 'auth.register',
		'uses' => 'Auth\AuthController@postRegister',
]);
Route::get('auth/logout', [
	'as' => 'auth.logout',
	'uses' => 'Auth\AuthController@getLogout'
]);


Route::group(['middleware' => 'auth'], function () {

	get('/dashboard', [
		'as' => 'dashboard.index',
		'uses' => 'DashboardController@index',
	]);
	
	get('list-files', [
		'as' => 'files.index',
		'uses' => 'FilesController@index'
	]);
	post('list-files', [
		'as' => 'files.store',
		'uses' => 'FilesController@store'
	]);

});