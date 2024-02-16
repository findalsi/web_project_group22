<?php
include 'db.php';
include_once '../myFeature/header.php';
$a = $_GET['card_id'];
$result = mysqli_query($conn, "SELECT * FROM gift_cards WHERE card_id='$a'");
$row = mysqli_fetch_array($result);
?>
<h2> Update your gift card information below: </h2>
<form name="form1" method="post" action="">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Recipient's Name" name="recipientName" required value="<?php echo $row['recipient_name']; ?>">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Recipient's Email" name="recipientEmail" required value="<?php echo $row['recipient_email']; ?>">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <input type="number" class="form-control" placeholder="Amount" name="amount" step="0.01" required value="<?php echo $row['amount']; ?>">
        </div>

        <div class="col">
            <textarea class="form-control" placeholder="Optional Message" name="message" rows="4"><?php echo $row['message']; ?></textarea>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col"><button type="submit" class="btn btn-primary" name="submit">Update Gift Card Information</button></div>
        <div class="col"><button type="submit" class="btn btn-primary" name="delete">Delete Gift Card</button></div>
    </div>
</form>

<?php
if (isset($_POST['submit'])) {
    $recipientName = $_POST['recipientName'];
    $recipientEmail = $_POST['recipientEmail'];
    $amount = $_POST['amount'];
    $message = $_POST['message'];

    $query = mysqli_query($conn, "UPDATE gift_cards SET recipient_name='$recipientName', recipient_email='$recipientEmail', amount=$amount, message='$message' WHERE card_id='$a'");

    if ($query) {
        echo "<h2>Your gift card information is updated successfully</h2>";
        // If you want to redirect to another page after updating
        // header("location: update.php");
    } else {
        echo "Record not modified";
    }
}

if (isset($_POST['delete'])) {
    $query = mysqli_query($conn, "DELETE FROM gift_cards WHERE card_id='$a'");

    if ($query) {
        echo "Gift card with id: $a deleted successfully <br>";
        // If you want to redirect to another page after deleting
        // header("location: update.php");
    } else {
        echo "Gift card not deleted";
    }
}

$conn->close();
include '../myFeature/footer.php';
?>

