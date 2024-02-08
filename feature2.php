<?php
$title = "Gift Card Purchase";
include '../web_project_group22/layout/header.php';
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
                            <input type="text" class="form-control" id="recipientName" name="recipientName" required>
                        </div>

                        <div class="mb-3">
                            <label for="recipientEmail" class="form-label">Recipient's Email:</label>
                            <input type="email" class="form-control" id="recipientEmail" name="recipientEmail" required>
                        </div>

                        <div class="mb-3">
                            <label for="amount" class="form-label">Amount:</label>
                            <input type="number" class="form-control" id="amount" name="amount" step="0.01" required>
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

<?php
include '../web_project_group22/layout/footer.php';
?>