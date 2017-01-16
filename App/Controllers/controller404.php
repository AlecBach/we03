<?php

namespace App\Controllers;

use App\Views\view404;

Class controller404
{

	public function show(){
      $view = new view404();
      $view->render();
	}

}

