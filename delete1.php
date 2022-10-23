<?php

include "db1.php"; // Using database connection file here
// echo "wcscdce hii";
$id = $_GET['id']; // get name through query string
echo "$id";

$del = mysqli_query($conn, "delete from addstudent where id='$id'"); // delete query

if ($del) {
    mysqli_close($conn); // Close connection
    header("location:view1.php"); // redirects to all records page
    exit;
}
 else {
    echo "Error deleting record"; // display error message if not delete
}
?>