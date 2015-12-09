<?php

$servername = "localhost";
$username = "alu4588";
$password = "5AW2YC";
$dbname = "alu4588";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
