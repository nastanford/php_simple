<?php
  include_once $_SERVER['DOCUMENT_ROOT'].'/classes/Database.php';
  class Users extends Database
  {
    // constructor
    public function __construct()
    {

    }

    public function checkLogin($email,$password) 
    {
      $sql = "SELECT * FROM users WHERE email = ? and password = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$email,$password]);
      $results = $stmt->fetchAll();
      return $results;
    }

    public function getUser($firstname,$lastname,$email) 
    {
      $sql = "SELECT * FROM users WHERE firstname like ? and lastname like ? and email like ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$firstname,$lastname,$email]);
      $results = $stmt->fetchAll();
      return $results;
    }

    public function getByID($id) 
    {
      $sql = "SELECT * FROM users WHERE id = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$id]);
      $results = $stmt->fetchAll();
      return $results;
    }  
    
    public function getAll() 
    {
      $sql = "SELECT * FROM users order by lastname, firstname";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
      $results = $stmt->fetchAll();
      return $results;
    }
  }
?>