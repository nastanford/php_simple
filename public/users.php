<?php
  $pagetitle = "Users";
  include_once $_SERVER['DOCUMENT_ROOT'].'/queries/qry_users.php';
  include_once $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';

  echo "<div class='container'>";
  echo "<H1>".$pagetitle."</H1>";
  $userCount=count($users);
  for($i=0;$i<$userCount;$i++)
  {
    echo "<br>".
    $users[$i]['firstname']." ".
    $users[$i]['lastname'];  
  }
  echo "</div>";
  include_once $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php';
?>