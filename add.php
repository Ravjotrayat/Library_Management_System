<?php

include "db1.php";
$bookname = $_POST['bookname'];
$bookauthor = $_POST['bookauthor'];
$bookpub = $_POST['bookpub'];
$bookprice = $_POST['bookprice'];
$bookquantity = $_POST['bookquantity'];
$bookdate = $_POST['bookdate'];

$sql = mysqli_query($conn, "INSERT INTO `addbook` ( `id`, `name`, `author`, `publication`, `price`, `quantity`, `date`) VALUES (0, '$bookname', '$bookauthor', '$bookpub', '$bookprice', '$bookquantity', '$bookdate') " );

 
// OR to check whether the data is entered or not.
// if (isset($_POST['submit']))
// if (!empty($bookname['bookname']))
// if($conn->query($sql)==true)   
 header("location:view.php");

// echo " data filled and safed successful";

// else
//   {  echo "<br>";
//     echo "Nothing is Entered,pls enter the details";
//   }
?> 