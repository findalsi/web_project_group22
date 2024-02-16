<?php
$title = "Read Data";
include '../layout/header.php'; 
include 'db3.php';
// SQL query to retrieve data from the 'Restaurant_week_reservation' table
$sql = "SELECT * FROM Restaurant_week_reservation";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>table_no</th>
                    <th>fname</th>
                    <th>lname</th>
                    <th>email</th>
                    <th>menu</th>
                    <th>no_of_people</th>
                    <th>date</th>
                    <th>time</th>
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td><a href='updatesingle3.php?table_no=$row[table_no]'><span style='color: red;'>$row[table_no]</a></td>
                <td>{$row['first_name']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['menu']}</td>
                <td>{$row['people']}</td>
                <td>{$row['d_date']}</td>
                <td>{$row['d_time']}</td>
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