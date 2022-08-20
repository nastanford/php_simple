<?php
  $pagetitle = "Users";
  include_once $_SERVER['DOCUMENT_ROOT'].'/queries/qry_users.php';
  include_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';

  echo "<div class='container'>";
  echo "<H1>".$pagetitle."</H1>";
  $userCount=count($users);
  echo '<div class="col-12 text-end me-2 mb-2"><button type="button" class="btn btn-primary">Add</button> </div>';
  echo '<table class="table table-striped">';
  echo '<thead><tr><th width="20">Edit</th><th>First Name</th><th>Last Name</th><th width="20">Delete</th></tr></thead><tbody>';
  for($i=0;$i<$userCount;$i++)
  {
    echo '<tr>';
    echo '<td><a href="edit.php?id='.$users[$i]['id'].'">Edit</a></td>';
    echo '<td>'.$users[$i]['firstname'].'</td>';
    echo '<td>'.$users[$i]['lastname'].'</td>';
    echo '<td class="text-center"><a href="act_delete.php?id='.$users[$i]['id'].'">X</a></td>';
    echo '</tr>';
  }
  echo '</tbody></table>';
  echo '</div>';


  include_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';
?>


