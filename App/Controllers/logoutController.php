<?php

namespace App\Controllers;

use App\Views\logoutView;

Class logoutController
{

	public function show(){
      $view = new logoutView();
      $view->render();
	}

}

