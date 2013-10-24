<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::any('user/login', [
	'as'	=> 'login',
	'uses'	=> 'UserController@login'
]);

Route::any('user/register', [
	'as'	=> 'register',
	'uses'	=> 'UserController@register'
]);

Route::any('user/logout', [
	'as'	=> 'logout',
	'uses'	=> 'UserController@logout'
]);