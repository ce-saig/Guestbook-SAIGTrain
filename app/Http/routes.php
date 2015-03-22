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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

/* This is Lazy route. you shouldn't do somethings like this. */
Route::get('lazy', function() {
	return "Hi Human ! ";
});

/* Route with Parameter */

Route::get('show/{name}' , function($name) {
	return "My name is <b>{$name}</b>";	
});

/* Route with View */
Route::get('profile/home',function() {
	return view('profile');
});

/* Route with View and passing the parameter */
Route::get('profile/show/{username}',function($username) {
	return view('profile',['username' => $username]);
});

Route::get('profile/show/blade/{value}',function($value) {

	$check = false;

	return view('bladeEx',["values" => $value,"numbers" => [1,2,3,4], "check" => $check ]);
});

/*------------------------------- WORKSHOP ----------------------------------------------*/

Route::post('comment','commentController');


/* Route with controller. */
Route::get('guestbook' , 'GuestbookController@index');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
