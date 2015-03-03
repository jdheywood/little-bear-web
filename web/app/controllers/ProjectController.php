<?php

class ProjectController extends BaseController {

  public function index() {
    $this->layout->messages = array();

    $pageTitle = 'Project Management';
    $navigationActive = 'project';

    $this->layout->content = View::make('project.index');
    View::share(array('pageTitle' => $pageTitle, 'navigationActive' => $navigationActive));
  }

}