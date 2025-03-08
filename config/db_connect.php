<?php
$servername = "localhost";
$username = "root"; // Change if you have a different username
$password = ""; // Change if you have a database password
$database = "gravia"; // Change to your actual database name

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
