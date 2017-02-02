<?php

namespace App\Views;

Class mustLoginView extends View 
{
	public function render(){
		$page="forceLogin";
		$title = " - You must log in";
		include "templates/master.inc.php";
	}

	public function content(){
		extract($this->data);
		include "templates/mustLogin.inc.php";
	}
}

