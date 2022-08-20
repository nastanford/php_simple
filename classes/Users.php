<?php

class Users extends Database
{
  // constructor
  public function __construct()
  {

  }

  public function getUser($email,$password) 
  {
    $sql = "SELECT * FROM users WHERE email = ? and password = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$email,$password]);
    $results = $stmt->fetchAll();
    return $results;
  }

  public function getUserByID($id) 
  {
    $sql = "SELECT * FROM users WHERE id = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$id]);
    $results = $stmt->fetchAll();
    return $results;
  }  
  
  public function getAll() 
  {
    $sql = "SELECT * FROM users";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();
    return $results;
  }
}

?>