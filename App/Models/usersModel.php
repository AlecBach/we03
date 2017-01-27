<?php

namespace App\Models;

use PDO;
use App\Views\editAccountView;
use finfo;
use Intervention\Image\ImageManagerStatic as Image;

Class usersModel extends databaseModel
{
	protected static $tablename = 'users';
	protected static $columns = [
		'email' ,
		'password',
		'firstName',
		'lastName',
		'profileImage'
	];

	// Return true if E-Mail exists
	// Return false if E-Mail not found
	public function doesThisEmailExist( $email ) {

		$db = $this->getDatabaseConnection();

		$sql = "SELECT email FROM users WHERE email=:email";

		$statement = $db->prepare($sql);

		$statement->bindValue(':email', $email);

		$statement->execute();

		if( $statement->rowCount() == 1) {
			return true;
		} else {
			return false;
		}

	}

	public function saveNewUser($destination) {

		// Get the database connection
		$db = $this->getDatabaseConnection();
		$sql = "";
		// Prepare the SQL
		if (isset($destination)) {
			$sql = "INSERT INTO users (email, password, firstName, lastName, profileImage)
				VALUES (:email, :password, :firstName, :lastName, :profileImage)";
		}else{
			$sql = "INSERT INTO users (email, password, firstName, lastName)
				VALUES (:email, :password, :firstName, :lastName)";
		};
		
		$statement = $db->prepare($sql);

		// Bind the form data to the SQL query
		$statement->bindValue(':email', $_POST['email']);
		$statement->bindValue(':password', $_POST['password']);
		$statement->bindValue(':firstName', $_POST['firstName']);
		$statement->bindValue(':lastName', $_POST['lastName']);
		if (isset($destination)) {
			$statement->bindValue(':profileImage', "{$destination}");
		};
		var_dump($statement);

		// Run the query
		$result = $statement->execute();

		// Confirm that it worked
		if( $result == true ) {
			// Yay!

			$_SESSION['user_id'] = $db->lastInsertId();
			$_SESSION['user_email']= $_POST['email'];
			$_SESSION['privilege'] = 'user';
			if (isset($destination)) {
				$_SESSION['user_image'] = $destination;
			};

			header('Location: index.php?page=account');
		} else {
			// Uh oh...

		}

		// If it did, log the user in and redirect to their 
		// new account page!

	}


	// Login functionality
	public function attemptLogin() {

		$db = $this->getDatabaseConnection();

		// Find the password of the user with a matching email
		$sql = "SELECT id, password, privilage, email, profileImage FROM users
				WHERE email = :email  ";

		$statement = $db->prepare($sql);

		$statement->bindValue(':email', $_POST['email']);

		$statement->execute();

		$record = $statement->fetch(PDO::FETCH_ASSOC);
		

		// Did we get an array? (EMAIL FOUND!)
		if( is_array($record) ) {
			// Email found
			$result = password_verify( $_POST['password'] ,$record['password']);

			// If the result is good
			if( $result == true ) {
				// Log the user in and redirect to account page
				$_SESSION['user_id'] = $record['id'];
				$_SESSION['privilage'] = $record['privilage'];
				$_SESSION['user_email'] = $record['email'];
				if (isset($record['profileImage'])){
					$_SESSION['user_image'] = $record['profileImage'];
				}

				header('Location: ./?page=account');
			} else {
				// Bad password, return false so user sees error message
				return false;
			}



		} else {
			// Email not found
			// Tell user bad credentials
			return false;
		}


	}


	public function saveImage($filename){

		$finfo = new finfo(FILEINFO_MIME_TYPE);
		$mimetype = $finfo->file($filename);

		// Create all possible extensions
		$extensions = [
			'image/jpg' => '.jpg',
			'image/png' => '.png',
			'image/jpeg' => '.jpeg',
			'image/gif' => '.gif',
		];

		// if mime type is present, then select appropriate extension for file.
		if(isset($extensions[$mimetype])){
			$extension = $extensions[$mimetype];
		} else {
			$extension = '.jpg';
		}

		// create filename
		$newFilename = uniqid() . $extension;
		
		// to store the image file in database, give it to the object.
		$this->image = $newFilename;

		$folder = "imgs/users/{$_POST['email']}/";

		if(! is_dir($folder)){
			mkdir($folder, 0777, true);
		}

		$destination = $folder.$newFilename;
		move_uploaded_file($filename, $destination);

		$img = Image::make($destination);
		$img->fit(500, 500);
		$img->save($folder . $newFilename);

		if (! is_dir("imgs/users/{$_POST['email']}/thumbnails/")){
			mkdir("imgs/users/{$_POST['email']}/thumbnails/", 0777, true);
		}

		$img = Image::make($destination);
		$img->fit(100, 100);
		$img->save($folder . "thumbnails/" . $newFilename);

		return $destination;
	}

	public function deleteUser(){

		$db = $this->getDatabaseConnection();

		// Find the password of the user with a matching email
		$sql = "SELECT id, password FROM users
				WHERE email = :email  ";

		$statement = $db->prepare($sql);

		$statement->bindValue(':email', $_SESSION['user_email']);

		$statement->execute();

		$record = $statement->fetch(PDO::FETCH_ASSOC);
		
		if( is_array($record) ) {

			$result = password_verify( $_POST['password'] ,$record['password']);

			// If the result is good
			if( $result == true ) {

				$sql = "DELETE FROM users WHERE id = :id";

				$statement = $db->prepare($sql);

				$statement->bindValue(':id', $record['id']);

				$statement->execute();

				session_destroy();

				header("Location: index.php");
			}else{
				return false;
			}
		}
	}

	public function editUser(){

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
			$view = new editAccountView(compact("errors user"));
      		$view->render();
      		return;
		}

		// If everything is good to go:
		// echo '<pre>';
		// print_r($_POST);

		// Hash the password (don't save it plain text)
		$_POST['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT);

		// Insert new user into database
		$destination = '';
		if($_FILES['image']['error'] === UPLOAD_ERR_OK){
			$destination = saveImage($_FILES['image']['tmp_name']);
		}else{
			$destination = null;
		}

		$db = $this->getDatabaseConnection();

		$sql = "UPDATE `users` SET `email`=:email,`firstName`=:firstName,`lastName`=:lastName,`profileImage`=:profileImage WHERE id=:id";

		$statement = $db->prepare($sql);


	}

}


