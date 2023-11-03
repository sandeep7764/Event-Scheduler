<!DOCTYPE html>
<html>
<head>
    <title>Add Event</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: "SDMCET-college-dharwad-small.jpeg";
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 15px;
        }

        main {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .event {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
        }

        .event h2 {
            margin-bottom: 10px;
            color: #333;
        }

        .event p {
            color: #666;
        }

        .event-time {
            font-weight: bold;
        }

        .event-venue {
            margin-top: 10px;
            color: #555;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
        }

        label, input {
            display: block;
            margin-bottom: 10px;
        }

        button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2>Add Event</h2>
    <form action="save_event.php" method="post">
        <label for="event_no">Event Number:</label>
        <input type="number" name="event_no" required>

        <label for="event_name">Event Name:</label>
        <input type="text" name="event_name" required>

        <label for="event_time">Event Time:</label>
        <input type="time" name="event_time" required>

        <label for="event_date">Event Date:</label>
        <input type="date" name="event_date" required>

        <label for="event_summary">Event Summary:</label>
        <textarea name="event_summary" rows="4" required></textarea>

        <label for="event_venue">Event Venue:</label>
        <input type="text" name="event_venue" required>

        <input type="submit" value="Save Event">
    </form>
</body>
</html>
