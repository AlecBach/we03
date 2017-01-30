<?php

namespace App\Controllers;

use App\Views\blogView;

Class blogController
{

	public function show(){

	  //find all blog posts
	  $allPosts = [];

      $view = new blogView(compact('allPosts'));
      $view->render();
	}
}