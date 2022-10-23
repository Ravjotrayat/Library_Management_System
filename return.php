<?php

include "db3.php";
$bookname = $_POST['bookname'];
$studentname = $_POST['studentname'];
$issuedate = $_POST['issuedate	'];
$returndate = $_POST['returndate'];
// $ = $_POST[''];
// $ = $_POST[''];
// $ = $_POST[''];

$sql= mysqli_query($conn, "INSERT INTO `returnbook` ( `bookname`, `studentname`, `issuedate`, `returndate`) VALUES ('$bookname', '$studentname', '$issuedate', '$returndate' ) ");

header("location:returnview.php");
// echo " connected";
