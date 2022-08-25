<?php
  $pagetitle = "Users";
  include_once $_SERVER['DOCUMENT_ROOT'].'/../queries/qry_users.php';
  include_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';

  echo "<div class='container'>";
  echo "<H1>".$pagetitle."</H1>";
  $userCount=count($users);
  echo '<table class="table table-striped">';
  echo '<thead><tr><th>First Name</th><th>Last Name</th></tr></thead><tbody>';
  for($i=0;$i<$userCount;$i++)
  {
    echo '<tr>';
    echo '<td>'.$users[$i]['firstname'].'</td>';
    echo '<td>'.$users[$i]['lastname'].'</td>';
    echo '</tr>';
  }
  echo '</table></tbody></div>';
  echo '</div>';


  include_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';
?>


