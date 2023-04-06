<?php 
require_once('connection.php');
$connection = new Connection();
$dbConnection = $connection->getConnection();
if($dbConnection){

 
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  

  $query = "INSERT INTO contact (name, email, subject, message) VALUES (?, ?, ?, ?)";
  $stmt = $dbConnection->prepare($query);
  $stmt->bind_param("ssss", $name, $email, $subject, $message);
  
 
  

  if($stmt->execute()){
    
    echo "saved Successfully";
    header("location: contact.php");
    exit();
  }
  else echo "Unsuccessful"; 
}




?>