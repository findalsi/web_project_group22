<?php

$servername = "localhost";
$username = "haneeta23000";
$password = "QBCcV9Sb";
$dbname = "wp_haneeta23000";



$conn = new mysqli($servername, $username, $password, $dbname);



if ($conn->connect_error) {
    die("Connection Failed:" . $conn->connect_error);

}

?>