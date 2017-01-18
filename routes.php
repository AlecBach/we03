<?php

namespace App\Controllers;

  $page = isset($_GET['page']) ? $_GET['page'] : "home";

  switch ($page) {
    
    case 'home':

      $controller = new HomeController();
      $controller->show();
      break;

    case 'login':

      $controller = new loginController();
      $controller->show();
      break;

    case 'logout':
      unset($_SESSION['user_id']);
      unset($_SESSION['privilege']);
      unset($_SESSION['user_email']);
      header('Location: index.php');
      break;

    case 'register':

      $controller = new registerController();
      $controller->show();
      break;

    case 'register.store':
    
      $controller = new registerController();
      $controller->store();
      break;

    default:
      $controller = new controller404();
      $controller->show();
      break;
  }











