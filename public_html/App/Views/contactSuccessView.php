<?php

namespace App\Views;

Class contactSuccessView extends View 
{
	public function render(){
		$page="contact";
		$title = " - Contact me";
		include "templates/master.inc.php";
	}

	public function content(){
		include "templates/contact.inc.php";
		include "templates/contactSuccess.inc.php";
	}
}

