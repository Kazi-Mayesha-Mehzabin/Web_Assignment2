<?php 
require_once('connection.php');
$connection = new Connection();
$dbConnection = $connection->getConnection();
if($dbConnection){

 
  $phone = $_POST['phone'];
  $password = $_POST['pass'];
  

  $query = "SELECT *  FROM `user` WHERE phone=".$phone." AND pass=mayesha";
 
  $result= $dbConnection->query($query);

  if($result->num_rows>0){
    echo "Successful";
  }
  else echo "Unsuccessful"; 
}




?>