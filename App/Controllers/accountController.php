<?php

namespace App\Controllers;

use App\Views\accountView;
use App\Models\userInfoModel;

Class accountController
{

	public function show(){

	  $model = new userInfoModel();
	  $user = $model->find($_GET['id']);

	  if(isset($user['dateCreated'])){
	  	$user['dateCreated'] = date("m/d/Y", strtotime($user['dateCreated']));
	  };

      $view = new accountView(compact('user'));
      $view->render();
	}

}