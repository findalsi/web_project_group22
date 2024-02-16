<?php
// Include database connection code
include "db.php";

// Retrieve form data
$recipientName = $_POST['recipientName'];
$recipientEmail = $_POST['recipientEmail'];
$amount = $_POST['amount'];
$message = $_POST['message'];

// Insert data into the gift_cards table
$sql = "INSERT INTO gift_cards (recipient_name, recipient_email, amount, message) VALUES ('$recipientName', '$recipientEmail', $amount, '$message')";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Gift card purchased successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}
