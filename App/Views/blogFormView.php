<?php

namespace App\Views;

Class blogFormView extends View 
{
	public function render(){
		$page="blogForm";
		$title = " - New blog post";
		include "templates/master.inc.php";
	}

	public function content(){
		extract($this->data);
		include "templates/blogPostForm.inc.php";
	}
}

