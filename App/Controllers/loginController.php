<?php

namespace App\Controllers;

use App\Views\loginView;

Class loginController
{

	public function show(){
      $view = new loginView();
      $view->render();
	}

}

