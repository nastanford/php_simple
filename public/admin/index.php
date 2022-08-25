<?php 
  $pagetitle = "Admin";
  include_once $_SERVER['DOCUMENT_ROOT'].'/../classes/users.php';
  include_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
  include_once $_SERVER['DOCUMENT_ROOT'].'/admin/secure.php';
  echo 
    "<div class='container'>".
    "<H1>".$pagetitle."</H1>".
    "</div>";
?>
<div class="row">
  <div class="col-2 ms-2">
    <ul>
      <li><a href="/admin/users/index.php">Users</a></li>
      <li><a href="/admin/customers/index.php">Customers</a></li>
    </ul>
  </div>
</div>
<?php
  include_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';
?>