<?php
// for insertion
// Create connection
$conn = new mysqli("localhost", "admins", "admins", "admins");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$event_no = $_POST['event_no'];
$event_name = $_POST['event_name'];
$event_time = $_POST['event_time'];
$event_date = $_POST['event_date'];
$event_summary = $_POST['event_summary'];
$event_venue = $_POST['event_venue'];

// Prepare and execute SQL insert statement
$sql = "INSERT INTO events (event_id, event_name, event_time, event_date, event_summary, event_venue)
        VALUES ('$event_no', '$event_name', '$event_time', '$event_date', '$event_summary', '$event_venue')";

if ($conn->query($sql) === TRUE) {
    echo "Event saved successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
