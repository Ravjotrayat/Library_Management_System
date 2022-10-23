<?php
include "db1.php";
$Id = $_POST['id'];
$sql = mysqli_query($conn, "SELECT * from addbook where id ='$Id' ");
$eidt = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book Details</title>
    <style>
.form,input{
    padding: 22px;
}
button{
    padding: 22px;
}
    </style>
</head>
<body>
    <fieldset>
        <center><h2><center>Edit Book Details</center></h2>
<form action="update.php" method="post" name="addbook"  >


 <!-- <label for="id"></label> -->
 <input type="text" name="id" id="id" value="<?php echo $eidt['name']; ?>" readonly>


     <input type="text" name="bookname" id="bookname" placeholder="ENTER THE BOOKNAME" value="<?php echo $eidt['name']; ?>" ><br>

     <input type="text" name="bookauthor" id="bookauthor" placeholder="ENTER THE BOOKAUTHOR" value="<?php echo $eidt['author'];?>"  ><br>

     <input type="text" name="bookpub" id="bookpub" placeholder="ENTER THE PUBLICATION" value="<?php echo $eidt['publication'];?>"  ><br>

     <input type="text" name="bookprice" id="bookprice" placeholder="ENTER THE PRICE" value="<?php echo $eidt['price'];?>"  ><br>

     <input type="text" name="bookquantity" id="bookquantity" placeholder="ENTER THE QUANTITY" value="<?php echo $eidt['quantity'];?>"  ><br>

     <input type="date" name="bookdate" id="bookdate" placeholder="ENTER THE DATE" value="<?php echo $eidt['date'];?>"  ><br><br>

   <button type="submit">Submit</button>
    </center>

    
</form>
</fieldset>

</body>
</html>