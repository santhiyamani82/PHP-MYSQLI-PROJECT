<?php
session_start();
$userId = $_SESSION['userId'];

include('conn.php');
define('tableName', 'userdetails');

if(!$userId){
  header("location:login.php");
}

function getUserbyId(){
    
    global $conn;
    $userId = $_SESSION['userId'];
    $data = [];

     $query = "SELECT * FROM `employeedetails` WHERE email='$userId'";
 

    $result = $conn->query($query);
    
    if($result->num_rows > 0) {
      $data = $result->fetch_assoc(); 
    } else {
       header("location:index.php");
    }

    return $data;
}