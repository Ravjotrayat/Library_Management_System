<?php
/*
"UPDATE addstudent SET name='" .$_POST['studentname'] ."',roll='" . $_POST['roll_no'] ."',dept='" .$_POST['department'] ."',sem='" .$_POST['semester'] ."',contact='" .$_POST['contact'] ."',email='" .$_POST['email'] ."' "
*/
include_once "db1.php";
$getId=$_POST['id'];

// $query="UPDATE addstudent SET name=$_POST['studentname'] roll=$_POST['roll_no'] dept=$_POST['department'] sem=$_POST['semester'] contact=$_POST['contact'] email=$_POST['email']";

$query = "UPDATE addstudent SET name='" .$_POST['studentname'] ."',roll='" . $_POST['roll_no'] ."',dept='" .$_POST['department'] ."',sem='" .$_POST['semester'] ."',contact='" .$_POST['contact'] ."',email='" .$_POST['email'] ."' where id='$getId'";

mysqli_query($conn, $query);
header("location:view1.php");

?>