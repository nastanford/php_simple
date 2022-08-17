<?php 
  if(isset($_SESSION['email']) && $_SESSION['email'] == true)
  { 
  } else {
    header('Location: /index.php'); 
  }  
?>
