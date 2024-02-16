<?php
//  localhost
$servername = "php24-db-1";
$username = "crud_app";
$password = "password";
$dbname = "crud_app";


// create database connection
$conn = new mysqli($servername,$username,$password,$dbname);
//check connection
if ($conn->connect_error){

    die("Connection Failed:" . $conn->connect_error);
}

?>