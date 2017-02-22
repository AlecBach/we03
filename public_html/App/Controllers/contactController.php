<?php

namespace App\Controllers;

use App\Views\contactView;
use App\Views\contactSuccessView;
use App\Models\contactModel;

Class contactController
{

	public function show(){
      $view = new contactView();
      $view->render();
	}

	public function try(){

		$errors = [];

		$namePattern = '/^[a-zA-Z ]*$/';

		//firstName validation
		if( strlen($_POST['name']) == 0 ){
			$errors['name'] = 'Required';
		} elseif( strlen($_POST['name']) > 50 ){
			$errors['name'] = 'Must be 50 characters or less.';
		} elseif( !preg_match($namePattern, $_POST['name']) ){
			$errors['name'] = 'May only contain alphabetic characters.';
		}

		$emailPattern = '/^[a-zA-Z0-9_\-.]{1,100}@[a-zA-Z0-9_\-.]{1,100}\.[a-zA-Z.]{1,100}$/';

		if( strlen($_POST['email']) == 0 ){
			$errors['email'] = 'Required';
		}elseif( ! preg_match($emailPattern, $_POST['email']) ) {
			$errors['email'] = 'Please enter a valid E-Mail address';
		} 

		$phonePattern = '/^[0-9 ]+$/';

		if( strlen($_POST['phone']) == 0 ){
			$errors['phone'] = 'Required';
		}elseif( ! preg_match($phonePattern, $_POST['phone']) ) {
			$errors['phone'] = 'Please enter only numbers and spaces.';
		} 
		//die(var_dump($errors));
		if( count($errors) > 0 ) {
			// Oh dear, errors.
			$view = new contactView(compact('errors'));
	  		$view->render();
	  		return;
		}

		//SEND EMAIL TO MEEEE

		$view = new contactSuccessView();
	    $view->render();
	}

}

