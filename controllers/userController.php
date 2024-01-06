<?php 
require_once("../config/config.php");
 require_once("../models/User.php");
 require_once("../database/database.php");
 

  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $name =$_POST['name'];
    $age =$_POST['age'];
     
    $user = new User();

    $user->insert($name, $age);

    echo"INSERTED SUCCESSFULLY";

  }