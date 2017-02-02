<?php

namespace App\Views;

Class blogView extends View 
{
	public function render(){
		$page="blog";
		$title = " - Blog";
		include "templates/master.inc.php";
	}

	public function content(){
		extract($this->data);
		include "templates/blog.inc.php";
	}
}

