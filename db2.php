<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="login";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo " Connected 1234 ";
// header("location:login.php");?>