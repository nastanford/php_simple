<?php
  include_once '../config.php';
  $config = new Config();
  include_once '../classes/Database.php';
  include_once '../classes/customers.php';
  $results = new Customers();
  $customers = $results->getAll();

?>