<?php

namespace App\Controllers;

use App\Views\accountView;
use App\Models\userInfoModel;

Class accountController
{

	public function show(){

	  $model = new userInfoModel();
	  $user = $model->find($_GET['id']);

      $view = new accountView(compact('user'));
      $view->render();
	}

}