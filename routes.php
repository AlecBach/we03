<?php

namespace App\Controllers;

  $page = isset($_GET['page']) ? $_GET['page'] : "home";

  switch ($page) {
    
    case 'home':

      $controller = new HomeController();
      $controller->show();
      break;

    case 'login':

      if(!isset($_SESSION['user_email'])){
        $controller = new loginController();
        $controller->show();
      }else{
        $controller = new logoutController();
        $controller->show();
      }

      break;

    case 'login.send':

      if(!isset($_SESSION['user_email'])){
        $controller = new loginController();
        $controller->processLoginForm();
      }else{
        $controller = new logoutController();
        $controller->show();
      }
      break;

    case 'login.forgot':

      if(!isset($_SESSION['user_email'])){
        $controller = new loginController();
        $controller->showForgot();
      }else{
        $controller = new logoutController();
        $controller->show();
      }
      break;

    case 'logout':
      unset($_SESSION['user_id']);
      unset($_SESSION['privilege']);
      unset($_SESSION['user_email']);
      header('Location: index.php');
      break;

    case 'register':

      if(!isset($_SESSION['user_email'])){
        $controller = new registerController();
        $controller->show();
      }else{
        $controller = new logoutController();
        $controller->show();
      } 
      break;

    case 'register.store':
      
      if(!isset($_SESSION['user_email'])){
        $controller = new registerController();
        $controller->store();
      }else{
        $controller = new logoutController();
        $controller->show();
      }
      break;

    case 'account':

      if (isset($_GET['id'])) {
        $controller = new accountController();
        $controller->show();
      }else{
        header("Location: ./?page=account&id={$_SESSION['user_id']}");
      }
      break;

    default:

      $controller = new controller404();
      $controller->show();
      break;
  }











