<?php
// what to do with the data
if (isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];

//connect to the database server
include 'projectdb.php' ;

//write sql statement to insert data
$sql = "insert into sign_me_up(first_name, last_name, email, phone_number)
        values ('$fname', '$lname', '$email', '$phone_number')";


if ($conn->query($sql)===TRUE) {
    echo "Your data was recorded";
}
else {
    echo "Error :" .$sql . "<br>" . $conn->error;
}

//close the database connection

$conn->close();

}






?>