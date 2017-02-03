<?php

namespace App\Controllers;

use App\Views\blogView;
use App\Views\blogFormView;
use App\Views\blogArticleView;
use App\Models\postsModel;

Class blogController
{

	public function show(){

	  //find all blog posts
	  $allPosts = [];
	  $model = new postsModel;
	  $allPosts = $model->findAll();

      $view = new blogView(compact('allPosts'));
      $view->render();
	}
	public function showSpecific($id){

	  $post = [];
	  $model = new postsModel();
	  $post = $model->find($id);

	  $view = new blogArticleView(compact('post'));
	  $view->render();
	}
	public function showPost(){
	  $view = new blogFormView();
	  $view->render();
	}
	public function store(){
	  $model = new postsModel();
	  $destination = $model->saveImage($_FILES['image']['tmp_name']);
	  $model->storePost($destination);
	}
}
