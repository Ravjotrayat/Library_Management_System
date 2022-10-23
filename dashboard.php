<?php
echo "";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>

<style>
   
body{
    background-image: url('books.jpg');
    background-attachment: fixed;  
    background-size: cover;
}
  .wrapper{
      width: 900px;
      margin: 0 auto;
  }
 
  .wrapper ul{
      list-style: none;
      margin-top: 2%;
  }
 .wrapper ul li {
     background: #262626;
     width: 170px;
     border: 1px solid #fff;
     height: 50px;
     line-height: 50px;
     text-align: center;
     float: left;
     color: #fff;
     font-size: 16px;
     position: relative;
     font-family: poppins;
     text-transform: uppercase;
     font-weight: bold;
 }

 .wrapper ul li:hover{
     background: crimson;
 }
 .wrapper ul ul{
     display: none;
 }
 .wrapper ul li:hover>ul{
     display:block;
 }
 .wrapper ul ul ul{
     margin-left: 170px;
     top: 0;
    position: absolute;
 }
</style>
</head>
<body>
    <style>
        *{
            text-decoration: none;
        }
    </style>
    <center>
<div class="wrapper">
    <ul>
    <li>Student
    <ul><li><a href="student/adds1.html"> Add student</a> </li>
        <!-- <li><a href="student/view1.php"> Remove Student</a></li> -->
        <li><a href="student/view1.php"> View information</a></li>
        <!-- books/view.php -->
        </ul>
    <li> <a href="deatils/about.html " style="color: white;">About</a> </li>
    <li>Books
    <ul></li>
    <li><a href="books/adds.html">Add books</a> </li>
     <li><a href="issue/issuebook.html">issue books</a> </li>
    <li><a href="return/returnbook.html">return books</a> </li>
    <li><a href="books/view.php">book info.</a> </li>
    </ul>
    </li>
    <li> <a href="contact/contact.html"style="color: white;"> Contact</a></li>
    <li> <a href="./login.html" style="color: white;" >Exit</a> </li>
</ul>
</div>
</center>
</body>
</html>


