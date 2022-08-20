<?php 
  $pagetitle = "Customers";
  include_once '../../../config.php';
  $config = new Config();
  include_once '../../includes/header.php';
  include_once '../secure.php';
  echo 
    "<div class='container'>".
    "<H1>".$pagetitle."</H1>".
    "</div>";
?>
<div class="row">
  <div class="col-2 ms-2">
    Admin Customers
  </div>
</div>
<?php
  include_once '../../includes/footer.php';
?>