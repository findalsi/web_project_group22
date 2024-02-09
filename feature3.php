<?php
$title ="Vantaa Restaurant Week 2024";
include '../web_project_group22/layout/header.php'; ?>

<br><br><br>
<h1>Reservation at The Gourmet:</h1>
<form name="reservation" method="post" action="process.php">
    <div class="form-group">
        <div class="row">
            <div class="col-sm-1">
            </div>
            <div class="col-sm-5">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter your first name here" name="fname" required>
            </div>
            <div class="col-sm-5">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter your last name here" name="lname" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-sm-1">
            </div>
            <div class="col-sm-5">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" placeholder="Enter your email here" name="email" required>
            </div>
            <div class="col-sm-5">
                <label for="menu">Menu:</label>
                <select class="form-control" id="menu" name="menu">
                    <option value="Curanto">Curanto</option>
                    <option value="Dim Sum">Dim Sum</option>
                    <option value="Fondue">Fondue</option>
                    <option value="Pintxos">Pintxos</option>
                    <option value="Sashimi">Sashimi</option>
                    <option value="Tagine">Tagine</option>
                    <option value="Wine">secret garden reserva red</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
           <div class="col-sm-1">
           </div>
           <div class="col-sm-5">
                <label for="date">Date:</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div class="col-sm-5">
                <label for="time">Time:</label>
                <input type="time" class="form-control" id="time" name="time" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-5">
                <label for="no_of_people">Number of people:</label>
                <input type="number" class="form-control" id="fname" name="no_of_people" required>
            </div>
        </div>
    </div>
    <br> <br>

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<?php
include '../web_project_group22/layout/footer.php';  ?>