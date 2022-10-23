<?php

include "db2.php";
$studentname = $_POST['studentname'];
$department = $_POST['department'];
$sem = $_POST['sem'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$bname = $_POST['bname'];
$date = $_POST['date'];

$sql= mysqli_query($conn, "INSERT INTO `issuebook` ( `studentname`, `department`, `sem`, `contact`, `email`, `bname`, ``) VALUES ('$studentname', '$department', '$sem', '$contact', '$email', '$bname', '$date') ");

header("location:view.php");
// echo " connected";
