<?php
  $pagetitle = "Customer";
  include_once $_SERVER['DOCUMENT_ROOT'].'/queries/qry_customers.php';
  include_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';

  echo "<div class='container'>";
  echo "<H1>".$pagetitle."</H1>";
  $userCount=count($customers);
  echo '<table class="table table-striped">';
  echo '<thead><tr><th width="20">Edit</th><th>First Name</th><th>Last Name</th><th width="20">Delete</th></tr></thead><tbody>';
  for($i=0;$i<$userCount;$i++)
  {
    echo '<tr><td><a href="edit.php?id='.$customers[$i]['id'].'">Edit</a></td>';
    echo '<td>'.$customers[$i]['firstname'].'</td>';
    echo '<td>'.$customers[$i]['lastname'].'</td>';
    echo '<td class="text-center"><a href="act_delete.php?id='.$customers[$i]['id'].'">x</a></td></tr>';
  }
  echo '</table></tbody></div>';
  echo '</div>';
  include_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';
?>