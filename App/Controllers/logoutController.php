<?php

namespace App\Controllers;

use App\Views\logoutView;
use App\Views\mustLoginView;

Class logoutController
{

	public function showLogout(){
      $view = new logoutView();
      $view->render();
	}

	public function showLogin(){
      $view = new mustLoginView();
      $view->render();
	}

}

