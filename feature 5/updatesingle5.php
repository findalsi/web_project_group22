<?php
$title = "Update Data";
include '../layout/header.php';
include 'db5.php';

$a = $_GET['order_no'];
$result = mysqli_query($conn,"SELECT * FROM Order_online WHERE order_no= '$a'");
$row= mysqli_fetch_array($result);
?>
<h2> Update your information below: </h2>
<form name= "order_no" method="post" action="">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="name" name="name" required value="<?php echo $row['fname']; ?>">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="address" name="address" required value="<?php echo $row['d_address']; ?>" >
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <input type="email" class="form-control" placeholder="email" name="email" required value="<?php echo $row['email']; ?>">
    </div>

    <div class="col">
      <input type="tel" class="form-control" placeholder="contact_number" name="contact_number" required value="<?php echo $row['contact_number']; ?>">    
    </div>
  </div>
<br>
 <br>
  <div class="row">
    <div class="col">
      <input type="date" class="form-control" placeholder="delivery_date" name="date" required value="<?php echo $row['delivery_date']; ?>">
    </div>

    <div class="col">
      <input type="time" class="form-control" placeholder="delivery_time" name="time" required value="<?php echo $row['delivery_time']; ?>">    
    </div>
  </div>
<br>
<br>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="menu" name="menu" required value="<?php echo $row['menu']; ?>">
    </div>

    <div class="col">
      <input type="number" class="form-control" placeholder="number_of_portions" name="number_of_portions" required value="<?php echo $row['number_of_portions']; ?>">    
    </div>
  </div>
<br>
  <div class="row">
  <div class="col"><button type="submit" class="btn btn-primary" name="submit">Update your Information</button></div>
  <div class="col"><button type="submit" class="btn btn-primary" name="delete">Delete your Information</button></div>
</div>
</form>
<?php 

if (isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $raw_date = $_POST['date'];
    $date = date('Y-m-d', strtotime($raw_date));
    $time = $_POST['time'];
    $menu = $_POST['menu'];
    $no_of_portions = $_POST['number_of_portions'];
    $query = mysqli_query($conn,"UPDATE Order_online SET fname='$name', d_address='$address', email='$email', contact_number='$contact_number', delivery_date='$date', delivery_time='$time', menu='$menu', number_of_portions='$no_of_portions'
    WHERE order_no='$a'");
    if($query){
        echo "<h2>Your information is updated Successfully</h2>";
        // if you want to redirect to update page after updating
    }
    else { echo "Record Not modified";}
    }

    if (isset($_POST['delete'])){
        $query = mysqli_query($conn,"DELETE FROM Order_online where order_no='$a'");
        if($query){
            echo "Record Deleted with order_no: $a <br>";
            // if you want to redirect to update page after updating
            //header("location: update.php");
        }
        else { echo "Record Not Deleted";}
        }

$conn->close();

?>