<?php

class Connection
{

  private $server="localhost";
  private $username="root";
  private $pass="";
  private $dbname="contact_form";
  public $conn;
  public function getConnection(){
    

     $this->conn = new mysqli($this->server,$this->username,"",$this->dbname);
     if($this->conn){


     }
     else{

     }
     return $this->conn;
  }



}

 ?>
