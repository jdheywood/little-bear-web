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

Route::get('/', array('as' => '/', 'uses' => 'HomeController@index'));
Route::get('home', array('as' => 'home', 'uses' => 'HomeController@index'));

Route::get('about', array('as' => 'about', 'uses' => 'AboutController@index'));

Route::get('contact', array('as' => 'contact', 'uses' => 'ContactController@index'));

Route::get('parallax', array('as' => 'parallax', 'uses' => 'EffectController@parallax'));
