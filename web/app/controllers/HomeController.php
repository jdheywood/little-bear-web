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

  public $layout = 'layouts.carousel';

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function index() {
		$this->layout->messages = array();

		$pageTitle = "Little Bear Production Ltd.";
		$navigationActive = 'home';

		$this->layout->content = View::make('home.carousel');
		View::share(array('pageTitle' => $pageTitle, 'navigationActive' => $navigationActive));
	}

}
