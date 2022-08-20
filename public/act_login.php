<?php
  session_start();
  include_once './classes/users.php';
  $results = new Users();
  $user = $results->checkLogin($_POST['email'],$_POST['password']);
  if($user){
    $_SESSION['user'] = $user;
    header('Location: index.php');
  } else {
    header('Location: login.php?error=1');
  }
?>