<?php
$title = "Feature 1";
include '../my_feature1/layout/header.php';

?>
<br><br><br>
<h1>Make a Resevation</h1>

<form name="form1" method="post" action="action.php">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname" required minlength="3"  maxlength ="30">
            </div>
            <div class="col">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="lname" required minlength="3"  maxlength ="30">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" id="phone" placeholder name="phone" required>
            </div>
            <div class="col">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="email@example.com" name="email" required><br>
                <span id="emailError"></span>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="people">People:</label>
                <select class="form-control" id="people" name="people">
                    <option value="1 person">1 person</option>
                    <option value="2 people">2 people</option>
                    <option value="3 people">3 people</option>
                    <option value="4 people">4 people</option> 
                    <option value="5 people">5 people</option>
                </select>
            </div>
            <div class="col">
                <label for="lname">Date:</label>
                <input type="date" class="form-control" id="date" placeholder="" name="rdate" />
                
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="fname">Time:</label>
                <select class="form-control" id="time" name="rtime">
                <option value="Select Tme">Select Time</option>
                <option value="">7.00 am</option>
                <option value="">7.30 am</option>
                <option value="">8.00 am</option>
                <option value="">8.30 am</option>
                <option value="">9.00 am</option>
                <option value="">9.30 am</option>
                <option value="">10.00 am</option>
                <select> 
            </div>
            <div class="col">
                <label for="lname">Seating Type:</label>
                <select class="form-control" id="seating" name="seating">
                    <option value="Select Seating Type">Select Seating Type</option>
                    <option value="Standard">Standard</option>
                    <option value="Bar">Bar</option>
                </select>
            </div>
        </div>
    </div>
    
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="groupid">Select Occation:</label>
                <select class="form-control" id="occasion" name="occasion">
                    <option value="Select Occation">Select Occation</option>
                    <option value="Birthday">Birthday</option>
                    <option value="Anniversary">Anniversary</option>
                    <option value="Date">Date</option>
                </select>
            </div>
            <div class="col">
                <label for="city">Special Request:</label>
                <input type="text" class="form-control" id="request" placeholder="only 500 characters" name="request" required>
            </div>
            
        </div>
    </div><br> <br>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>



<script>
    // Date Picker
    let date = document.getElementById('date')
    date.addEventListener('change',(e)=>{
    let dateVal = e.target.value
   document.getElementById('dateSelected').innerText = dateVal
})

// function to validate email

function validateEmail() {
    const email= document.getElementById('email').value;
    const emailError = document.getElementById("emailError");

    // Check if the email is not empty and contains @
    if (email === "" || !email.includes("@")) {
        emailError.innerHTML = "Enter a valid email address";
        return false;
    } else {
        emailError.innerHTML = "";
        return true;
    }
}


//event lisners for real time validation
document.getElementById("email").addEventListener("input", validateEmail);

</script>

<?php
include '../web_project_group22/layout/footer.php';

?>