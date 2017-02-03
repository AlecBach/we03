<?php

namespace App\Views;

Class blogArticleView extends View 
{
	public function render(){
		$page="blogArticle";
		$title = " - Blog";
		include "templates/master.inc.php";
	}

	public function content(){
		extract($this->data);
		include "templates/blogArticle.inc.php";
	}
}

