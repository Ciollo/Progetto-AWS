<?php
$servername = "mysql-2"; // This should be the name of the MySQL service in your Docker Compose file
$username = "root"; // Your MySQL username
$password = "strong_password"; // Your MySQL password
$database = "prova"; // Name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Close connection
$conn->close();
?>

