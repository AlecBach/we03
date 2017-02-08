<?php

namespace App\Views;

Class blogEditView extends View 
{
	public function render(){
		$page="blogForm";
		$title = " - Edit blog post";
		include "templates/master.inc.php";
	}

	public function content(){
		extract($this->data);
		include "templates/blogEditForm.inc.php";
	}
}

