<?php 
  $pagetitle = "Customers";
  include_once $_SERVER['DOCUMENT_ROOT'].'/queries/qry_customers.php';
  include_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
  include_once $_SERVER['DOCUMENT_ROOT'].'/admin/secure.php';
  echo 
    "<div class='container'>".
    "<H1>".$pagetitle."</H1>".
    "</div>";
?>
<div class="row">
  <div class="col-2 ms-2">
    Customers
  </div>
</div>
<?php
  include_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';
?>