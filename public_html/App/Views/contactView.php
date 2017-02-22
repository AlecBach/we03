<?php

namespace App\Views;

Class contactView extends View 
{
	public function render(){
		$page="contact";
		$title = " - Contact me";
		include "templates/master.inc.php";
	}

	public function content(){
		extract($this->data);
		include "templates/contact.inc.php";
	}
}

