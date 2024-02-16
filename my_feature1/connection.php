<?php
$servername = "php24-db-1";
$username = "WebProjectGroup22";
$password = "1234";
$dbname = "WebProjectGroup22";

// create database connection

$conn = new mysqli($servername, $username, $password, $dbname);


//check connection
if ($conn->connect_error) {
   die("Connection Failed". $conn->connect_error);
}


?>