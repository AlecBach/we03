<?php

namespace App\Views;

Class accountView extends View 
{
	public function render(){
		$page="account";
		$title = " - Account";
		include "templates/master.inc.php";
	}

	public function content(){
		extract($this->data);
		include "templates/account.inc.php";
	}
}

