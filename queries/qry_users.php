<?php
  include_once '../classes/users.php';
  $results = new Users();
  $users = $results->getAll();
?>