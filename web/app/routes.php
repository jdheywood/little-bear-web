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

Route::get('/', array('as' => '/', 'uses' => 'HomeController@index'));
Route::get('home', array('as' => 'home', 'uses' => 'HomeController@index'));

Route::get('experience', array('as' => 'experience', 'uses' => 'ExperienceController@index'));

Route::get('portfolio', array('as' => 'portfolio', 'uses' => 'PortfolioController@index'));

Route::get('contact', array('as' => 'contact', 'uses' => 'ContactController@index'));
