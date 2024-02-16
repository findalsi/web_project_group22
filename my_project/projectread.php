<?php
include 'projectdb.php';
// SQL query to retrieve data from the 'studentsinfo' table
$sql = "SELECT * FROM sign_me_up";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>cus_number</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>email</th>
                    <th>phone_number</th>
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td><a href='updatedata.php?cus_number={$row['cus_number']}'>{$row['cus_number']}</a></td>
                <td>{$row['first_name']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phone_number']}</td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    // Display a message if no results are found
    echo "No results";
}
// close the connection when done
$conn->close();
?>