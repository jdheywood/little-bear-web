<?php

class ProductionController extends BaseController {

  public function index() {
    $this->layout->messages = array();

    $pageTitle = 'Production Management';
    $navigationActive = 'production';

    $this->layout->content = View::make('production.index');
    View::share(array('pageTitle' => $pageTitle, 'navigationActive' => $navigationActive));
  }

}