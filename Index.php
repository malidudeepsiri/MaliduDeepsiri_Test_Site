<?php
// Database credentials
$servername = "sql210.infinityfree.com";
$username = "if0_38039518";
$password = "YOUR_VPANEL_PASSWORD";
$dbname = "if0_38039518_jmalidudeepsiri";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$message = $conn->real_escape_string($_POST['message']);

// SQL query to insert the data into the database
$sql = "INSERT INTO malidu (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Message sent successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
