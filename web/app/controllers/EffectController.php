<?php

class EffectController extends BaseController {

  public $layout = 'layouts.parallax';

  public function parallax() {
    $this->layout->messages = array();

    $pageTitle = 'Parallax example - Stellar.js';
    $navigationActive = 'effect';

    $this->layout->content = View::make('effect.parallax');
    View::share(array('pageTitle' => $pageTitle, 'navigationActive' => $navigationActive));
  }

}