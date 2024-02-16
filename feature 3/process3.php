<?php
//what to do with data

if(isset($_POST['submit'])){
 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $email = $_POST['email'];
 $menu = $_POST['menu'];
 $no_of_people = $_POST['no_of_people'];
 $raw_date = $_POST['date'];
 $date = date('Y-m-d', strtotime($raw_date));
 $time = $_POST['time'];
 
// connect to the database server

include'db3.php';

// write sql statement to insert data
$sql = "insert into Restaurant_week_reservation(first_name, last_name, email, menu, people, d_date, d_time)
        values ('$fname', '$lname', '$email', '$menu', '$no_of_people', '$date', '$time')";

        if ($conn->query($sql)===TRUE) {
            echo "Your table reserved for the date.";
        }
        else {
            echo "Error :" .$sql ."<br>" . $conn->error;
        }

        // close the database connection
        $conn ->close();

    }      
?>