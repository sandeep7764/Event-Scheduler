<?php
// Database connection parameters
$servername = "localhost";
$username = "admins";
$password = "admins";
$dbname = "admins";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['event_id'])) {
        $event_id = $_POST['event_id'];

        // Get form data for updating
        $event_name = $_POST['event_name'];
        $event_time = $_POST['event_time'];
        $event_date = $_POST['event_date'];
        $event_summary = $_POST['event_summary'];
        $event_venue = $_POST['event_venue'];

        // Prepare and execute SQL update statement
        $sql = "UPDATE events
                SET event_name = '$event_name',
                    event_time = '$event_time',
                    event_date = '$event_date',
                    event_summary = '$event_summary',
                    event_venue = '$event_venue'
                WHERE event_id = $event_id";

        if ($conn->query($sql) === TRUE) {
            echo "Event updated successfully";
        } else {
            echo "Error updating event: " . $conn->error;
        }
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Event</title>
</head>
<body>
    <h1>Update Event</h1>
    <form action="update_event.php" method="post">
        <label for="event_id">Event ID:</label>
        <input type="text" id="event_id" name="event_id" required>

        <label for="event_name">Event Name:</label>
        <input type="text" id="event_name" name="event_name" required>

        <label for="event_date">Event Date:</label>
        <input type="date" id="event_date" name="event_date" required>

        <label for="event_time">Event Time:</label>
        <input type="time" id="event_time" name="event_time" required>

        <label for="event_summary">Brief Summary:</label>
        <textarea id="event_summary" name="event_summary" rows="4" required></textarea>

        <label for="event_venue">Event Venue:</label>
        <input type="text" id="event_venue" name="event_venue" required>

        <button type="submit">Update Event</button>
    </form>
</body>
</html>
