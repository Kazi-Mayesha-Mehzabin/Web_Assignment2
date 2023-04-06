<?php 
require_once('connection.php');
$connection = new Connection();
$dbConnection = $connection->getConnection();
if($dbConnection){

 
  $phone = $_POST['phone'];
  $password = $_POST['pass'];
  

  $query = "SELECT * FROM user WHERE phone = ? AND pass = ?";
  $stmt = $dbConnection->prepare($query);
  $stmt->bind_param("ss", $phone, $password);
  $stmt->execute();
 
  $result = $stmt->get_result();

  if($result->num_rows>0){
    echo "Successful";
    header("location: contact.php");
    exit();
  }
  else echo "Unsuccessful"; 
}




?>