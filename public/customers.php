
<?php 

  include_once '../queries/qry_customers.php';

  $pagetitle = "Customers";

  include_once '../includes/header.php';
  echo "<H1>".$pagetitle."</H1>";



  for($i=0;$i<count($customers);$i++)
  {
    echo "<br>".$customers[$i]['firstname']." ".$customers[$i]['lastname'];  
  }

?>
<?php 
  include_once '../includes/footer.php';
?>