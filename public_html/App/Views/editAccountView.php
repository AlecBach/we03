<?php

namespace App\Views;

Class editAccountView extends View 
{
	public function render(){
		$page="editAccount";
		$title = " - Edit Account";
		include "templates/master.inc.php";
	}

	public function content(){
		extract($this->data);
		include "templates/editAccount.inc.php";
	}
}

