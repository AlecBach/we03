<?php

namespace App\Controllers;

use App\Views\accountView;
use App\Models\usersModel;

Class accountController
{

	public function show(){
      $view = new accountView();
      $view->render();
	}

}