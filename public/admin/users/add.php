<?php
  $pagetitle = "Add Users";
  include_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
  echo "<div class='container'>";
  echo "<H1>".$pagetitle."</H1>";
  ?>
<div class="row">
  <div class="col-4"></div>
  <div class="col-4 bg-light text-dark">
    <form action="act_insert.php" method="post">
    <div class="mb-1">
        <label for="firstname" class="form-label">First Name</label>
        <input name="firstname" type="text" class="form-control" id="firstname">
      </div>
      <div class="mb-1">
        <label for="lastname" class="form-label">Last Name</label>
        <input name="lastname" type="text" class="form-control" id="lastname">
      </div>
      <div class="mb-1">
        <label for="email" class="form-label">Email</label>
        <input name="email" type="text" class="form-control" id="email">
      </div>
      <div class="mb-1">
        <label for="password" class="form-label">password</label>
        <input name="password" type="password" class="form-control" id="password">
      </div>
      <div class="mb-1 text-center">
        <input type="submit" class="btn btn-primary" value="Save">
      </div>
    </form>
  </div>
</div>

  <?php
  echo '</div>';
  include_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';
?>


