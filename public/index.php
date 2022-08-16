<?php 
  include_once '../config.php';
  $config = new Config();
  
  $pagetitle = "Home";
  include_once 'includes/header.php';

  echo "<H1>".$pagetitle."</H1>";

  include_once 'includes/footer.php';
?>