<?php
// Create connection
$conn = new mysqli("localhost", "admins", "admins", "admins");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute SQL select statement
$sql = "SELECT * FROM events";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Event List</h1>";
    echo "<table border='1'>
        <tr>
            <th>Event ID</th>
            <th>Event Name</th>
            <th>Event Time</th>
            <th>Event Date</th>
            <th>Event Summary</th>
            <th>Event Venue</th>
        </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>" . $row["event_id"] . "</td>
            <td>" . $row["event_name"] . "</td>
            <td>" . $row["event_time"] . "</td>
            <td>" . $row["event_date"] . "</td>
            <td>" . $row["event_summary"] . "</td>
            <td>" . $row["event_venue"] . "</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "No events found.";
}

// Close the database connection
$conn->close();
?>
