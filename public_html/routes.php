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

    case 'account.edit.try':

      if(isset($_SESSION['user_email'])){
        $controller = new accountController();
        $controller->processEdit();
      }else{
        $controller = new logoutController();
        $controller->showLogin();
      }
      break;

    case 'account.editPass':

      if(isset($_SESSION['user_email'])){
        $controller = new accountController();
        $controller->editPass();
      }else{
        $controller = new logoutController();
        $controller->showLogin();
      }
      break;

    case 'account.editPass.try':

      if(isset($_SESSION['user_email'])){
        $controller = new accountController();
        $controller->processEditPass();
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

    case 'blog':
      if(isset($_GET['id'])){
        $controller = new blogController();
        $controller->showSpecific($_GET['id']);
      }else{
        $controller = new blogController();
        $controller->show();
      }
      break;

    case 'blog.adminPost':

      if(isset($_SESSION['user_email']) && $_SESSION['privilage'] == "Admin"){
        $controller = new blogController();
        $controller->showPost();
      }else{
        header("Location: ./?page=naughty");
      }
      break;

    case 'blog.delete':

      if(isset($_SESSION['user_email']) && $_SESSION['privilage'] == "Admin"){
        $controller = new blogController();
        $controller->delete($_GET['id']);
        header("Location: ./?page=blog");
      }else{
        header("Location: ./?page=naughty");
      }
      break;

     case 'blog.edit':

      if(isset($_SESSION['user_email']) && $_SESSION['privilage'] == "Admin"){
        $controller = new blogController();
        $controller->editPost($_GET['id']);
      }else{
        header("Location: ./?page=naughty");
      }
      break;

    case 'blog.edit.try':

      if(isset($_SESSION['user_email']) && $_SESSION['privilage'] == "Admin"){
        $controller = new blogController();
        $controller->processEditPost($_GET['id']);
      }else{
        header("Location: ./?page=naughty");
      }
      break;

    case 'blog.store':

      if(isset($_SESSION['user_email']) && $_SESSION['privilage'] == "Admin"){
        $controller = new blogController();
        $controller->store();
      }else{
        header("Location: ./?page=naughty");
      }
      break;

    case 'contact':

      $controller = new contactController();
      $controller->show();
      break;

    case 'contact.try':

      $controller = new contactController();
      $controller->try();
      break;

    case "naughty":

      $controller = new controller404();
      $controller->show();
      break;

    default:

      $controller = new controller404();
      $controller->show();
      break;
  }










