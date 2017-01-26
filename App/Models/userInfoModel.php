<?php

namespace App\Models;

use PDO;
// use finfo;
// use Intervention\Image\ImageManagerStatic as Image;

Class userInfoModel extends databaseModel
{
	protected static $tablename = 'users';
	protected static $columns = [
		'email' ,
		'firstName',
		'lastName',
		'profileImage'
	];
}

