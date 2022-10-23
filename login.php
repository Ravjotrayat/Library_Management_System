<?php
include "db.php";
// database name 
$username = $_POST['username'];
$pass = $_POST['password'];

$sql = mysqli_query($conn ,"select * from `loginform` where username = '$username' AND password = '$pass' ");
$check = mysqli_fetch_array($sql); 
if(isset($check))
{ 
    // dashboard.php is to go where u want to go after login
    header("location:dashboard.php");
}
else{
    // echo " error occured ";
header("location:login.html");


}

?>