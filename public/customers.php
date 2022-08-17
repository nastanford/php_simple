<?php
  $pagetitle = "Customers";
  include_once '../config.php';
  $config = new Config();
  include_once '../queries/qry_customers.php';
  include_once 'includes/header.php';
  echo "<div class='container'>";
  echo "<H1>".$pagetitle."</H1>";
  for($i=0;$i<count($customers);$i++)
  {
    echo "<br>".
    $customers[$i]['firstname']." ".
    $customers[$i]['lastname'];  
  }
  echo "</div>";
  include_once 'includes/footer.php';
?>