<?php

namespace App\Models;

use PDO;
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
		$sql = "SELECT id, password, privilage, email FROM users
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



}


