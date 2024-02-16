<?php
$title = "Update Data";
include '../layout/header.php';
include 'db3.php';

$a = $_GET['table_no'];
$result = mysqli_query($conn,"SELECT * FROM Restaurant_week_reservation WHERE table_no= '$a'");
$row= mysqli_fetch_array($result);
?>
<h2> Update your information below: </h2>
<form name= "table_no" method="post" action="">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="fname" name="fname" required value="<?php echo $row['first_name']; ?>">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="lname" name="lname" required value="<?php echo $row['last_name']; ?>" >
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <input type="email" class="form-control" placeholder="email" name="email" required value="<?php echo $row['email']; ?>">
    </div>

    <div class="col">
    <input type="text" class="form-control" placeholder="menu" name="menu" required value="<?php echo $row['menu']; ?>">    
    </div>
  </div>
<br>
 <br>
  <div class="row">
    <div class="col">
    <input type="number" class="form-control" placeholder="number_of_people" name="number_of_people" required value="<?php echo $row['people']; ?>">
    </div>

    <div class="col">
    <input type="date" class="form-control" placeholder="date" name="date" required value="<?php echo $row['d_date']; ?>">    
    </div>
  </div>
<br>
<br>
  <div class="row">
    <div class="col">
    <input type="time" class="form-control" placeholder="time" name="time" required value="<?php echo $row['d_time']; ?>"> 
    </div>
    <div class="col">
    </div>
<br>
<br><br>
  <div class="row">
  <div class="col"><button type="submit" class="btn btn-primary" name="submit">Update your Information</button></div>
  <div class="col"><button type="submit" class="btn btn-primary" name="delete">Delete your Information</button></div>
</div>
</form>
<?php 

if (isset($_POST['submit'])){
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $menu = $_POST['menu'];
    $no_of_people = $_POST['number_of_people'];
    $raw_date = $_POST['date'];
    $date = date('Y-m-d', strtotime($raw_date));
    $time = $_POST['time'];
    $query = mysqli_query($conn,"UPDATE Restaurant_week_reservation SET first_name='$fname', last_name='$lname', email='$email', menu='$menu', people='$no_of_people', d_date='$date', d_time='$time' 
    WHERE table_no='$a'");
    if($query){
        echo "<h2>Your information is updated Successfully</h2>";
        // if you want to redirect to update page after updating
    }
    else { echo "Record Not modified";}
    }

    if (isset($_POST['delete'])){
        $query = mysqli_query($conn,"DELETE FROM Restaurant_week_reservation where table_no='$a'");
        if($query){
            echo "Record Deleted with table_no: $a <br>";
            // if you want to redirect to update page after updating
            //header("location: update.php");
        }
        else { echo "Record Not Deleted";}
        }

$conn->close();

?>