<?php

namespace App\Models;

use PDO;
use finfo;
use Intervention\Image\ImageManagerStatic as Image;

Class postsModel extends databaseModel
{
	protected static $tablename = 'blog_posts';
	protected static $columns = [
		'id',
		'title' ,
		'content',
		'image',
		'image_style',
		'date_posted'
	];

	public function storePost($destination){

		$db = $this->getDatabaseConnection();

		$sql = "INSERT INTO blog_posts (title, content, image) VALUES (:title, :content, :image)";

		$statement = $db->prepare($sql);

		// Bind the form data to the SQL query
		$statement->bindValue(':title', $_POST['title']);
		$statement->bindValue(':content', $_POST['postContent']);
		$statement->bindValue(':image', $destination);

		$result = $statement->execute();

		if($result == true){
			header("Location: ./?page=blog&id={$db->lastInsertId()}");
		}else{
			header("Location: ./?page=blog.adminPost");
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

		$folder = "imgs/blog/";

		if(! is_dir($folder)){
			mkdir($folder, 0777, true);
		}

		$destination = $folder.$newFilename;
		move_uploaded_file($filename, $destination);

		$img = Image::make($destination);
		$img->save($folder . $newFilename);

		return $destination;
	}
}