<?php 
  include_once '../config.php';
  $config = new Config();
  $pagetitle = "Home";
  include_once 'includes/header.php';
  echo 
    "<div class='container'>".
    "<H1>".$pagetitle."</H1>".
    "</div>";
  include_once 'includes/footer.php';
?>