<?php

namespace App\Views;

Class view404 extends View 
{
	public function render(){
		$page="404";
		$title = " - 404 Error";
		include "templates/master.inc.php";
	}

	public function content(){
		extract($this->data);
		include "templates/404.inc.php";
	}
}
