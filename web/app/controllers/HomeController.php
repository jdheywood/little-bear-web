<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function index() {
		$this->layout->messages = array();

		$pageTitle = "Home";
		$navigationActive = 'home';

		$this->layout->content = View::make('home.index');
		View::share(array('pageTitle' => $pageTitle, 'navigationActive' => $navigationActive));
	}

}
