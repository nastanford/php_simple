<?php
  include_once $_SERVER['DOCUMENT_ROOT'].'/../classes/Database.php';
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
    $sql = "SELECT * FROM customers order by lastname, firstname";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();
    return $results;
  }
}
?>