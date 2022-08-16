<?php 
  include_once '../config.php';
  $config = new Config();
  $pagetitle = "Home";
  include_once 'includes/header.php';
?>

<div class="container">
<?php
  echo "<H1>".$pagetitle."</H1>";
?>
</div>

<?php
  include_once 'includes/footer.php';
?>