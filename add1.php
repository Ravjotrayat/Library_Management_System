<?php
include "db1.php";

$studentname = $_POST['studentname'];
$roll_no = $_POST['roll_no'];
$department = $_POST['department'];
$semester = $_POST['semester'];
$contact = $_POST['contact'];
$email = $_POST['email'];
// Database name can be change acc. to condition......

$sql = "INSERT INTO `addstudent` (`id`, `name`, `roll`, `dept`, `sem`, `contact`, `email`) VALUES ('0', '$studentname', '$roll_no', '$department', '$semester', '$contact', '$email' )";

// insert in database 
$rs = mysqli_query($conn, $sql);

header("location:view1.php");
