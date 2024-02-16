<?php
$title = "sign me up";
include '../my_project/layout/header.php';



?>

<h2>Input Your Information Below:</h2>
<form name="form1" method="post" action="projectprocess.php">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname" required minlength="3" maxlength="30">>
            </div>
            <div class="col">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="lname" required minlength="3" maxlength="30">>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="email">email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required>
            </div>
            <span id = "emailError"></span>
            <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="phone_number">Phone Number:</label>
                <input type="number" class="form-control" id="phone_number" placeholder="Enter your Phone Number" name="phone_number" required>
            </div>
</div><br> <br>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    
</form>

<script>
function validateemail() {
    const email = document.getElementById('email').value;
    const emailError = document.getElementById("emailError");

    
    if (email === "" || !email.includes("@")) {
        emailError.innerHTML = "<span>Enter a valid email address</span>";
        return false;
    } else {
        emailError.innerHTML = "";
        return true;
    }
}



document.getElementById("email").addEventListener("input", validateemail);
</script>


<?php
include '../my_project/layout/footer.php';