<?php

//reusable connection for including where needed

$serverName = "localhost:3308";
$userName = "root";
$password = "";
$dbName = "contactinfo";

// connection 
$conn = mysqli_connect($serverName,$userName,$password,$dbName);

//check if connection have failed
if(!$conn) {
  die("Connection failed " . mysqli_connect_error());
}

?>