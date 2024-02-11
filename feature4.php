<?php
$title = "sign me up";
include '../web_project_group22/layout/header.php';



?>

<h2>Input Your Information Below:</h2>
<form name="form1" method="post" action="process.php">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname" required>
            </div>
            <div class="col">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="lname" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="email">email:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter your email" name="email" required>
            </div>
            <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="phone_number">Phone Number:</label>
                <input type="number" class="form-control" id="phone_number" placeholder="Enter your Phone Number" name="phone_number" required>
            </div>
        
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<?php
include '../web_project_group22/layout/footer.php';
?>