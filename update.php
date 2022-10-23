<?php

include_once "db1.php";

mysqli_query($conn, "UPDATE addbook set name='" .$_POST['bookname'] ."',author='" . $_POST['bookauthor'] ."',publication='" .$_POST['bookpub'] ."',price='" .$_POST['bookprice'] ."',quantity='" .$_POST['bookquantity'] ."',date='" .$_POST['bookdate'] ."' WHERE Id='" . $_POST['id'] . "'");
header("location:view.php");

?>