<?php

// what to do with data


if (isset($_POST["submit"])) {
     $fname = $_POST["fname"];   // use name given in form on html 
     $lname = $_POST["lname"];
     $phone = $_POST["phone"];
     $email = $_POST["email"];
     $people = $_POST["people"];
     $date = $_POST["rdate"];
     $time = $_POST["rtime"];
     $seating =  $_POST["seating"];
     $occasion = $_POST["occasion"];
     $request =  $_POST["request"];


// connect to the database server
 include "connection.php";



 // write sql statment to insert data
$sql = "insert into reservations(first_name, last_name, phone_no, email, no_of_people, rdate, rtime, seating_type, occasion, special_request)
        values('$fname', '$lname', '$phone', '$email', '$people', '$date', '$time', '$seating', '$occasion', '$request')";


if($conn->query($sql)=== True){
    echo "Your data was recorded";
} 

else {
    echo "Error:" .$sql . "<br>" .$conn->error;
}
 
// close the database connection

$conn->close();

}

?>