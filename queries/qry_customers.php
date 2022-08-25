<?php
  include_once $_SERVER['DOCUMENT_ROOT'].'/../classes/customers.php';
  $results = new Customers();
  $customers = $results->getAll();
?>