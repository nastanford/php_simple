<?php
  include_once './classes/Database.php';

class Customers extends Database
{
  // constructor
  public function __construct()
  {

  }

  public function getCustomers($firstname) 
  {
    $sql = "SELECT * FROM customers WHERE firstname = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$firstname]);
    $results = $stmt->fetchAll();
    return $results;
  }  
  
  public function getAll() 
  {
    $sql = "SELECT * FROM customers";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();
    return $results;
  }
}
?>