<?php
$servername = "localhost";
$username = "root";
$password = "Chim@30*"; // Enter your MySQL password here
$database = "finance_manager";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
