<?php
session_start();

// output post varaibles
if(isset($_POST['email']) && isset($_POST['password']))
{
  if($_POST['email'] == 'jsample@test.com' && $_POST['password'] == 'password')
  {
    // set session variables
    $_SESSION['email']    = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['loggedin'] = true;
    // redirect to admin page
    // echo "Logged in";
    // var_dump($_SESSION);
    //  header('Location: index.php');
  }
  else
  {
    echo "Logged out";
    $_SESSION['loggedin'] = false;
    // redirect to login page
  //  header('Location: login.php');
  }

}

?>