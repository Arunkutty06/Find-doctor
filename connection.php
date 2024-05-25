<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname="finddoctor";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if(!$conn){
  die('Could not Connect MySql Server:' .mysql_error());
}
return $conn;

?>