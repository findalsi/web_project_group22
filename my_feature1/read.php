<?php
$title = 'Read Your Data';
include '../my_feature1/layout/header.php';
include 'connection.php';
// SQL query to retrieve data from the 'studentsinfo' table
$sql = "SELECT * FROM reservations";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>Reservation no</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone No</th>
                    <th>Email</th>
                    <th>No of People</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Seating Type</th>
                    <th>Occation</th>
                    <th>Special Request</th>
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td><a href='updatesingle.php?id=$row[reservation_no]'>$row[reservation_no]</a></td>
                <td>{$row['first_name']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['phone_no']}</td>
                <td>{$row['email']}</td>
                <td>{$row['no_of_people']}</td>
                <td>{$row['rdate']}</td>
                <td>{$row['rtime']}</td>
                <td>{$row['seating_type']}</td>
                <td>{$row['occasion']}</td>
                <td>{$row['special_request']}</td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    // Display a message if no results are found
    echo "No results";
}
// close the connection when done
$conn->close();

include '../my_feature1/layout/footer.php';
?>