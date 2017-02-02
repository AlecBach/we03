<?php

namespace App\Views;

Class logoutView extends View 
{
	public function render(){
		$page="logout";
		$title = " - Already signed in";
		include "templates/master.inc.php";
	}

	public function content(){
		extract($this->data);
		include "templates/logout.inc.php";
	}
}

