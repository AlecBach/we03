<?php

namespace App\Views;

Class forgotView extends View 
{
	public function render(){
		$page="forgot";
		$title = " - Recover Account";
		include "templates/master.inc.php";
	}

	public function content(){
		extract($this->data);
		include "templates/forgot.inc.php";
	}
}

