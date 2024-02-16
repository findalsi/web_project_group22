<?php
//what to do with data

if(isset($_POST['submit'])){
 $name = $_POST['name'];
 $address = $_POST['address'];
 $email = $_POST['email'];
 $contact_number = $_POST['contact_number'];
 $raw_date = $_POST['date'];
 $date = date('Y-m-d', strtotime($raw_date));
 $time = $_POST['time'];
 $menu = $_POST['menu'];
 $no_of_portions = $_POST['no_of_portions'];
 
 
// connect to the database server

include'db5.php';

// write sql statement to insert data
$sql = "insert into Order_online(fname, d_address, email, contact_number, delivery_date, delivery_time, menu, number_of_portions)
        values ('$name', '$address', '$email', '$contact_number', '$date', '$time', '$menu', '$no_of_portions')";

        if ($conn->query($sql)===TRUE) {
            echo "Your order has been taken.";
        }
        else {
            echo "Error :" .$sql ."<br>" . $conn->error;
        }

        // close the database connection
        $conn ->close();

    }      
?>