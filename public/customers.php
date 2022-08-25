<?php
  $pagetitle = "Customers";
  include_once $_SERVER['DOCUMENT_ROOT'].'/../queries/qry_customers.php';
  include_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
  echo "<div class='container'>";
  echo "<H1>".$pagetitle."</H1>";

  $customerCount=count($customers);
  for($i=0;$i<$customerCount;$i++)
  {
    echo "<br>".
    $customers[$i]['firstname']." ".
    $customers[$i]['lastname'];  
  }
  echo "</div>";
  include_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';
?>