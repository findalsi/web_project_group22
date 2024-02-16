<?php
// Include database connection code
include "db.php";

// SQL query to retrieve data from the 'gift_cards' table
$sql = "SELECT * FROM gift_cards";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Include header
include '../myFeature/header.php';

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<div class='container mt-5'>
            <h2>Gift Cards</h2>
            <table class='table'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Recipient Name</th>
                        <th>Recipient Email</th>
                        <th>Amount</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td><a href='updatesingle.php?card_id={$row['card_id']}'>{$row['card_id']}</a></td>
                <td>{$row['recipient_name']}</td>
                <td>{$row['recipient_email']}</td>
                <td>{$row['amount']}</td>
                <td>{$row['message']}</td>
              </tr>";
    }
    

    echo "</tbody></table></div>";
} else {
    // Display a message if no results are found
    echo "<div class='container mt-5'>
            <h2>No Gift Cards Found</h2>
          </div>";
}

// Include footer
include '../myFeature/footer.php';

$conn->close();
?>
