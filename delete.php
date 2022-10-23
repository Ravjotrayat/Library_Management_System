<?php

include "db1.php"; // Using database connection file here
// echo "wcscdce hii";
$bookname = $_GET['name']; // get name through query string
echo "$bookname";

$del = mysqli_query($conn, "delete from addbook where name='$bookname'"); // delete query

if ($del) {
    mysqli_close($conn); // Close connection
    header("location:view.php"); // redirects to all records page
    exit;
}
 else {
    echo "Error deleting record"; // display error message if not delete
}
?>