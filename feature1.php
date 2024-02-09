<?php
$title = "Feature 1";
include '../web_project_group22/layout/header.php';

?>

<br><br><br>
<h1>Make a Resevation:</h1>
<h2>Input Your Information Below:</h2>
<form name="form1" method="post" action="action.php">
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
                <label for="fname">Phone:</label>
                <input type="text" class="form-control" id="phone" placeholder="" name="phone" required>
            </div>
            <div class="col">
                <label for="lname">Email:</label>
                <input type="text" class="form-control" id="email" placeholder="email@example.com" name="email" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="fname">People:</label>
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
                <input type="date" class="form-control" id="date" placeholder="" name="date" />
                
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="fname">Time:</label>
                <input type="text" class="form-control" id="time" placeholder="" name="time" required>
            </div>
            <div class="col">
                <label for="lname">Seating Type:</label>
                <select class="form-control" id="seating" name="seating">
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

<script src="datepicker.js"></script>

<?php
include '../web_project_group22/layout/footer.php';

?>