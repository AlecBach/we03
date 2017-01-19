<?php
namespace App\Controllers;

use App\Views\registerView;
use App\Models\UsersModel;

Class registerController
{
	public function show(){
		$view = new registerView();
      	$view->render();
	}

	public function store() {
		// Prepare a container to hold all the error messages
		$errors = [];

		// Validate the form
		// Each field has been filled out

		// Email pattern
		$emailPattern = '/^[a-zA-Z0-9_\-.]{1,100}@[a-zA-Z0-9_\-.]{1,100}\.[a-zA-Z.]{1,100}$/';
		$namePattern = '/^[a-zA-Z ]*$/';

		if( $_POST['email'] != $_POST['emailConfirm'] ){
			$errors['email'] = 'Emails do not match.';
		} elseif( preg_match($emailPattern, $_POST['email']) ) {
			// Check database
			// die('Email good, check database');

			// Look the email in database
			$user = new usersModel();

			$result = $user->doesThisEmailExist( $_POST['email'] );

			// If the result is true
			if( $result == true ) {
				// Oops, this E-Mail is in use
				$errors['email'] = 'Email in use';
			}


		} else {
			// Generate error message
			$errors['email'] = 'Please enter a valid E-Mail address';
			
		} 


		// Passwords match and are at least 8 characters long
		if( strlen($_POST['password']) == 0 ) {
			// Password has not been provided
			$errors['password'] = 'Required';
		} elseif( strlen($_POST['password']) < 8 ) {
			$errors['password'] = 'Must be at least 8 characters';
		} elseif( $_POST['password'] != $_POST['passwordConfirm'] ) {
			$errors['password'] = 'Passwords do not match';
		}

		//firstName validation
		if( strlen($_POST['firstName']) == 0 ){
			$errors['firstName'] = 'Required';
		} elseif( strlen($_POST['firstName']) > 50 ){
			$errors['firstName'] = 'Must be 50 characters or less.';
		} elseif( !preg_match($namePattern, $_POST['firstName']) ){
			$errors['firstName'] = 'May only contain alphabetic characters.';
		}

		//lastName validation
		if( strlen($_POST['lastName']) == 0 ){
			$errors['lastName'] = 'Required';
		} elseif( strlen($_POST['lastName']) > 50 ){
			$errors['lastName'] = 'Must be 50 characters or less.';
		} elseif( !preg_match($namePattern, $_POST['lastName']) ){
			$errors['lastName'] = 'May only contain alphabetic characters.';
		}

		// If validation failed
		if( count($errors) > 0 ) {
			// Oh dear, errors.
			$view = new registerView($errors);
      		$view->render();
      		return;
		}

		// If everything is good to go:
		// echo '<pre>';
		// print_r($_POST);

		// Hash the password (don't save it plain text)
		$_POST['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT);

		// Insert new user into database

		$newUser = new usersModel();
		$destination = '';
		if($_FILES['image']['error'] === UPLOAD_ERR_OK){
			$destination = $newUser->saveImage($_FILES['image']['tmp_name']);
			$newUser->saveNewUser($destination);
		}else{
			$destination = null;
			$newUser->saveNewUser($destination);
		}
		// Log them in automatically (because we're nice)

		// Redirect to account page



	}

	 

	
}
