<?php 
  if(isset($_SESSION['user']) and  count($_SESSION['user']) == 1)
  { 
    // Logged in
  } else {
    // Not logged in
    header('Location: /index.php'); 
  }  
?>
