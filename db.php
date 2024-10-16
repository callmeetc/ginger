<?php
// Database configuration
$host = 'localhost'; // Database host
$dbname = 'onlinevotedb'; // Database name
$username = 'mimi'; // Database username
$password = 'fingers'; // Database password

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Close the connection

?>