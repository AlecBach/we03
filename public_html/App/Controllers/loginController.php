<?php

namespace App\Controllers;

use App\Views\loginView;
use App\Views\forgotView;
use App\Models\usersModel;

Class loginController
{

	public function show(){
      $view = new loginView();
      $view->render();
	}

	public function showForgot(){
      $view = new forgotView();
      $view->render();
	}

	public function processLoginForm() {

		// Make sure the email has been provided
		// Make sure the password has been provided
		// It should also be at least 8 chars,
		// no point bugging the database with a password
		// that is obviously wrong

		// Use the Users model
		$user = new usersModel();
		$result = $user->attemptLogin();

		// If bad then generate error messages
		$errors['login-error'] = 'Incorrect Email or Password.';

		// Show the view
		$view = new loginView($errors);
		$view->render();



	}

}

