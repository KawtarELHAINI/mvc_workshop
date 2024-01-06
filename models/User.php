<?php

  class User {
    
     private $db;
        public function __construct(){

       $this->db = Database::getInstance()->getDb();

    }
          public function insert($name, $age){

        $sql = "INSERT INTO user (name, age) VALUES (:name, :age)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":name",$name);
        $stmt->bindParam(":age",$age);
        $stmt->execute();
    }


  }