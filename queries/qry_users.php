<?php
  include_once '../config.php';
  $config = new Config();
  include_once '../classes/Database.php';
  include_once '../classes/users.php';
  $results = new Users();
  $users = $results->getAll();

?>