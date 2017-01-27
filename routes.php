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
        $controller->showLogout();
      }

      break;

    case 'login.send':

      if(!isset($_SESSION['user_email'])){
        $controller = new loginController();
        $controller->processLoginForm();
      }else{
        $controller = new logoutController();
        $controller->showLogout();
      }
      break;

    case 'login.forgot':

      if(!isset($_SESSION['user_email'])){
        $controller = new loginController();
        $controller->showForgot();
      }else{
        $controller = new logoutController();
        $controller->showLogout();
      }
      break;

    case 'logout':

      session_destroy();
      header('Location: index.php');
      break;

    case 'register':

      if(!isset($_SESSION['user_email'])){
        $controller = new registerController();
        $controller->show();
      }else{
        $controller = new logoutController();
        $controller->showLogout();
      } 
      break;

    case 'register.store':
      
      if(!isset($_SESSION['user_email'])){
        $controller = new registerController();
        $controller->store();
      }else{
        $controller = new logoutController();
        $controller->showLogout();
      }
      break;

    case 'account':

      if(isset($_SESSION['user_email'])){
        if (isset($_GET['id'])) {
          $controller = new accountController();
          $controller->show();
        }else{
          header("Location: ./?page=account&id={$_SESSION['user_id']}");
        }
      }else{
        $controller = new logoutController();
        $controller->showLogin();
      }
      break;

    case 'account.edit':

      if(isset($_SESSION['user_email'])){
        $controller = new accountController();
        $controller->edit();
      }else{
        $controller = new logoutController();
        $controller->showLogin();
      }
      break;

    case 'account.delete':

      if(isset($_SESSION['user_email'])){
        $controller = new accountController();
        $controller->delete();
      }else{
        $controller = new logoutController();
        $controller->showLogin();
      }
      break;

     case 'account.delete.try':

      if(isset($_SESSION['user_email'])){
        $controller = new accountController();
        $controller->processDelete();
      }else{
        $controller = new logoutController();
        $controller->showLogin();
      }
      break;

    default:

      $controller = new controller404();
      $controller->show();
      break;
  }










