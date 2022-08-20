<?php
  include_once './classes/customers.php';
  $results = new Customers();
  $customers = $results->getAll();
?>