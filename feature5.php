
++++++++++++++++++++++++++++++++++++++++++++++++++++++++<?php
$title ="Order online";
include '../web_project_group22/layout/header.php'; ?>

<br><br><br>
<h1>Online orders</h1>
<form name="order_online" method="post" action="process5.php">
    <div class="form-group">
        <div class="row">
            <div class="col-sm-1">
            </div>
            <div class="col-sm-5">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your name here" name="name" required>
            </div>
            <div class="col-sm-5">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" placeholder="Delivery address" name="address" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-sm-1">
            </div>
            <div class="col-sm-5">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" placeholder="Example@gmail.com" name="email" required>
            </div>
            <div class="col-sm-5">
                <label for="contact_number">Contact number:</label>
                <input type="tel" class="form-control" id="contact" placeholder="Enter your phone number" name="contact_number" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
           <div class="col-sm-1">
           </div>
           <div class="col-sm-5">
                <label for="date">Delivery date:</label>
                <input type="date" class="form-control" id="date" name="date" required>
           </div>
           <div class="col-sm-5">
                <label for="time">Delivery time:</label>
                <input type="time" class="form-control" id="time" name="time" required>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
           <div class="col-sm-1">
           </div>
           <div class="col-sm-5">
                <label for="menu">Menu:</label>
                <select class="form-control" id="menu" name="menu">
                    <option value="Curanto">Select a option</option>
                    <option value="Curanto">Curanto</option>
                    <option value="Dim Sum">Dim Sum</option>
                    <option value="Fondue">Fondue</option>
                    <option value="Pintxos">Pintxos</option>
                    <option value="Sashimi">Sashimi</option>
                    <option value="Tagine">Tagine</option>
                    <option value="Wine">secret garden reserva red</option>
                </select>
            </div>
            <div class="col-sm-5">
                <label for="no_of_portions">Number of portions:</label>
                <input type="number" class="form-control" id="portions" name="no_of_portions" required>
            </div>
        </div>
    </div>
    <br> <br>

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<?php
include '../web_project_group22/layout/footer.php';  ?>