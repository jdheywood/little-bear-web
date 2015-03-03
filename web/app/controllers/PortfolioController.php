<?php

class PortfolioController extends BaseController {

  public function index() {
    $this->layout->messages = array();

    $pageTitle = 'Portfolio';
    $navigationActive = 'portfolio';

    $this->layout->content = View::make('portfolio.index');
    View::share(array('pageTitle' => $pageTitle, 'navigationActive' => $navigationActive));
  }

}