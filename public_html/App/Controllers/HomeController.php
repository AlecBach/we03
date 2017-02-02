<?php

namespace App\Controllers;

use App\Views\HomeView;

Class HomeController
{

	public function show(){
      $view = new HomeView();
      $view->render();
	}

}

