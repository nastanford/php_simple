<?php
spl_autoload_register(function ($class_name) 
{
  include 'Models/'.$class_name . '.php';
  //include 'Controllers/'.$class_name . '.php';
  
});  

// 
// spl_autoload_register(function ($class_name) 
// {
//   echo $class_name . '.php';
//   echo "<hr>";
// });

// include_once 'classes/Database.php';
// include_once 'classes/Users.php';
// include_once 'Controllers/UsersController.php';
// include_once 'Views/UsersView.php';
// include_once '/phpoop/classes/Users.php'

// include_once 'classes/Users.php';
// include_once 'classes/Database.php';

// include_once 'Models/Database.php';
// include_once 'Models/Users.php';



?>