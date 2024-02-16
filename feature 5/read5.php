<?php
$title = "Read Data";
include '../layout/header.php'; 
include 'db5.php';
// SQL query to retrieve data from the 'Order_online' table
$sql = "SELECT * FROM Order_online";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>order_no</th>
                    <th>name</th>
                    <th>address</th>
                    <th>email</th>
                    <th>contact_number</th>
                    <th>delivery_date</th>
                    <th>delivery_time</th>
                    <th>menu</th>
                    <th>number_of_portions</th>
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td><a href='updatesingle5.php?order_no=$row[order_no]'><span style='color: red;'>$row[order_no]</a></td>
                <td>{$row['fname']}</td>
                <td>{$row['d_address']}</td>
                <td>{$row['email']}</td>
                <td>{$row['contact_number']}</td>
                <td>{$row['delivery_date']}</td>
                <td>{$row['delivery_time']}</td>
                <td>{$row['menu']}</td>
                <td>{$row['number_of_portions']}</td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    // Display a message if no results are found
    echo "No results";
}
// close the connection when done
$conn->close();

include '../layout/footer.php';  ?>