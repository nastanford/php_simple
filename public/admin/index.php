<?php 
  $pagetitle = "Admin";
  include_once '../../config.php';
  $config = new Config();
  include_once '../includes/header.php';
?>
<div class="container">
  <?php
    echo "<H1>".$pagetitle."</H1>";
  ?>
<?php
  include_once '../includes/footer.php';
?>