<?php

class ExperienceController extends BaseController {

  public function index() {
    $this->layout->messages = array();

    $pageTitle = 'Experience';
    $navigationActive = 'experience';

    $this->layout->content = View::make('experience.index');
    View::share(array('pageTitle' => $pageTitle, 'navigationActive' => $navigationActive));
  }

}