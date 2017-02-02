<?php

namespace App\Views;

Class loginView extends View 
{
	public function render(){
		$page="login";
		$title = " - Log in";
		include "templates/master.inc.php";
	}

	public function content(){
		extract($this->data);
		include "templates/login.inc.php";
	}
}

