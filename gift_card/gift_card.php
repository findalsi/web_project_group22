<?php
$title = "Gift Card Purchase";
include_once '../myFeature/header.php';
include "db.php";
?>

<!-- Gift Card Purchase Form -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Gift Card Purchase</h2>
                </div>
                <div class="card-body">
                    <form id="giftCardForm" action="process_gift_card.php" method="post">
                        <div class="mb-3">
                            <label for="recipientName" class="form-label">Recipient's Name:</label>
                            <input type="text" class="form-control" id="recipientName" name="recipientName" required minlength="3" maxlength="30">
                        </div>
                        <span id = "nameError"></span>

                        <div class="mb-3">
                            <label for="recipientEmail" class="form-label">Recipient's Email:</label>
                            <input type="email" class="form-control" id="recipientEmail" name="recipientEmail" required>
                        </div>
                        <span id = "emailError"></span>
                        <div class="mb-3">
                            <label for="amount" class="form-label">Amount:</label>
                            <input type="number" class="form-control" id="amount" name="amount" step="0.01" required min = "0.01" max = "1000">
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Optional Message:</label>
                            <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-dark">Purchase Gift Card</button>
                           
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
// function to validate name
function validateName() {
    const recipientName = document.getElementById('recipientName').value;
    const nameError = document.getElementById("nameError");

    if (recipientName.length < 3 || recipientName.length > 20) {
        nameError.innerHTML = "<span style='color: red;'>Name must be between 3 and 20 characters</span>";
        return false;
    } else {
        nameError.innerHTML = "";
        return true;
    }
}

// function to validate email
function validateEmail() {
    const recipientEmail = document.getElementById('recipientEmail').value;
    const emailError = document.getElementById("emailError");

    // Check if the email is not empty and contains @
    if (recipientEmail === "" || !recipientEmail.includes("@")) {
        emailError.innerHTML = "<span style='color: red;'>Enter a valid email address</span>";
        return false;
    } else {
        emailError.innerHTML = "";
        return true;
    }
}



// event listeners for real time validation
document.getElementById("recipientName").addEventListener("input", validateName);
document.getElementById("recipientEmail").addEventListener("input", validateEmail);
</script>
<?php
include '../myFeature/footer.php';
?>
