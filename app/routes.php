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
Route::get('/tour-of-heroes', array('uses' => 'HomeController@showTourOfHeroes'));
Route::get('/tour-of-heroes/{js_route}', array('uses' => 'HomeController@showTourOfHeroes'))->where('js_route', '(.*)');

// route to show the login form
Route::get('/login', array('uses' => 'HomeController@showLogin'));

// route to process the form
Route::post('/login', array('uses' => 'HomeController@doLogin'));

Route::get('logout', array('uses' => 'HomeController@doLogout'));