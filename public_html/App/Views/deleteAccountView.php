<?php

namespace App\Views;

Class deleteAccountView extends View 
{
	public function render(){
		$page="deleteAccount";
		$title = " - Delete Account";
		include "templates/master.inc.php";
	}

	public function content(){
		extract($this->data);
		include "templates/deleteAccount.inc.php";
	}
}

