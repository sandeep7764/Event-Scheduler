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

        // Prepare and execute SQL delete statement
        $sql = "DELETE FROM events WHERE event_id = $event_id";

        if ($conn->query($sql) === TRUE) {
            echo "Event deleted successfully";
        } else {
            echo "Error deleting event: " . $conn->error;
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
    <title>Delete Event</title>
</head>
<body>
    <h1>Delete Event</h1>
    <form action="delete_event.php" method="post">
        <label for="event_id">Event ID:</label>
        <input type="text" id="event_id" name="event_id" required>

        <button type="submit">Delete Event</button>
    </form>
</body>
</html>
