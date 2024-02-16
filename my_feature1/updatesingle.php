<?php
include '../my_feature1/layout/header.php';
include 'connection.php';
$a = $_GET['reservation_no'];
$result = mysqli_query($conn,"SELECT * FROM reservations WHERE reservation_no= '$a'");
$row= mysqli_fetch_array($result);
?>
<h2> Update your information below: </h2>
<form name= "form1" method="post" action="">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name" name="fname" required value="<?php echo $row['first_name']; ?>">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name" name="lname" required value="<?php echo $row['last_name']; ?>" >
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
    <input type="text" class="form-control" id="phone" placeholder name="phone" required value="<?php echo $row['phone_no']; ?>">
    </div>

    <div class="col">
    <input type="text" class="form-control" id="email" placeholder="email@example.com" name="email" required value="<?php echo $row['email']; ?>">    
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" id="people" name="people" required value="<?php echo $row['no_of_people']; ?>">
    </div>

    <div class="col">
      <input type="text" class="form-control" id="date" placeholder="" name="date"  required value="<?php echo $row['rdate']; ?>">    
    </div>
  </div>
  <br>

  <div class="row">
    <div class="col">
      <input type="text" class="form-control" id="time" name="time" required value="<?php echo $row['rtime']; ?>">
    </div>

    <div class="col">
      <input type="text" class="form-control" id="seating" name="seating" required value="<?php echo $row['seating_type']; ?>">    
    </div>
  </div>
  <br>

  <div class="row">
    <div class="col">
      <input type="text"  class="form-control" id="occasion" name="occasion"required value="<?php echo $row['occasion']; ?>">
    </div>

    <div class="col">
      <input type="text" class="form-control" id="request" placeholder="only 500 characters" name="request"  required value="<?php echo $row['special_request']; ?>">    
    </div>

  </div>




  
<br>
  <div class="row">
  <div class="col"><button type="submit" class="btn btn-primary" name="submit">Update your Information</button></div>
  <div class="col"><button type="submit" class="btn btn-primary" name="delete">Delete your Information</button></div>
</div>
</form>
<?php 
/* 
The isset() function is used to check if a variable is set and not NULL.
 In this case, it's checking if the $_POST['submit'] 
value is set and not NULL. If the form has been submitted, the value of $_POST['submit'] will be set,
and the code inside the if block will be executed. If the form has not been submitted, 
the value of $_POST['submit'] will not be set, and the code inside the if block will not be executed.
*/
if (isset($_POST['submit'])){
    
     $fname = $_POST["fname"];   // use name given in form on html 
     $lname = $_POST["lname"];
     $phone = $_POST["phone"];
     $email = $_POST["email"];
     $people = $_POST["people"];
     $date = $_POST["date"];
     $time = $_POST["time"];
     $seating =  $_POST["seating"];
     $occasion = $_POST["occasion"];
     $request =  $_POST["request"];
  
    $query = mysqli_query($conn,"UPDATE reservations set first_name='$fname', last_name='$lname', phone_no='$phone', email='$email', no_of_people='$people', rdate='$date', rtime='$time', seating_type='$seating', occasion='$occasion', special_request='$request' where reservation_no='$a'");
    if($query){
        echo "<h2>Your information is updated Successfully</h2>";
        // if you want to redirect to update page after updating
    }
    else { echo "Record Not modified";}
    }

    if (isset($_POST['delete'])){
        $query = mysqli_query($conn,"DELETE FROM reservations where reservation_no='$a'");
        if($query){
            echo "Record Deleted with reservation_no: $a <br>";
            // if you want to redirect to update page after updating
            //header("location: update.php");
        }
        else { echo "Record Not Deleted";}
        }

$conn->close();

include '../my_feature1/layout/footer.php';
?>