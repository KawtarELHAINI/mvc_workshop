<?php

class Database {
    
    private $db;
    public static $instance;
     
    public function connect() {

       $dsn = "mysql:host=" . DB_HOST . ";dbname=" .DB_NAME ;

      $this->db = new PDO($dsn, DB_USER, DB_PASS);

    }
   
    public static function getInstance() {

      if(self::$instance === NULL){
        self::$instance == new self();
      }


      return self::$instance;
    }
   
    public function getDb() {
        return $this->db;
    }


}