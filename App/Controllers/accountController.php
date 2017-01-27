<?php

namespace App\Controllers;

use App\Views\accountView;
use App\Views\deleteAccountView;
use App\Views\editAccountView;
use App\Models\userInfoModel;
use App\Models\usersModel;

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

	public function edit(){

	  $model = new userInfoModel();
	  $user = $model->find($_SESSION['user_id']);

	  $view = new editAccountView(compact('user'));
      $view->render();
	}
	public function processEdit(){

	  $model = new userInfoModel();
	  $user = $model->find($_SESSION['user_id']);

	  $model = new usersModel();
	  $result = $model->editUser();

	  $error['the-error']='Wrong password.';

	  $view = new editAccountView(compact('error user'));
      $view->render();
	}

	public function delete(){

	  $view = new deleteAccountView();
      $view->render();
	}
	public function processDelete(){

	  $model = new usersModel();
	  $result = $model->deleteUser();

	  $error['the-error']='Wrong password.';

	  $view = new deleteAccountView(compact('error'));
      $view->render();
	}

}