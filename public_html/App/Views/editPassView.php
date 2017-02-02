<?php

namespace App\Views;

Class editPassView extends View 
{
	public function render(){
		$page="editPass";
		$title = " - Change Password";
		include "templates/master.inc.php";
	}

	public function content(){
		extract($this->data);
		include "templates/editPass.inc.php";
	}
}

