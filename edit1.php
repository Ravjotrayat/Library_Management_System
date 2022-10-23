<?php
include "db1.php";
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * from addstudent where id='$id' ");
$edit = mysqli_fetch_array($sql);
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
#stuid{
    display:none;
}
    </style>
</head>
<body style="color: orange;">
    <fieldset style="background-color: pink;" >
        <center><h2><center>Edit Students Details</center></h2>
<form action="update1.php" method="post" name="addstudent"  >
      
    <input type="text" name="id" id="stuid" value="<?php echo $id ?>" ><br>
     <input type="text" name="studentname" id="studentname" placeholder="ENTER THE studentname" value="<?php echo $edit['name']; ?>" ><br>

     <input type="text" name="roll_no" id="roll_no" placeholder="ENTER THE roll_no" value="<?php echo $edit['roll'];?>"  ><br>

     <input type="text" name="department" id="department" placeholder="ENTER THE department" value="<?php echo $edit['dept'];?>"  ><br>

     <input type="text" name="semester" id="semester" placeholder="ENTER THE semester" value="<?php echo $edit['sem'];?>"  ><br>

     <input type="text" name="contact" id="contact" placeholder="ENTER THE contact" value="<?php echo $edit['contact'];?>"  ><br>

     <input type="email" name="email" id="email" placeholder="ENTER THE email" value="<?php echo $edit['email'];?>"  ><br><br>

   <button type="submit">Submit</button>
    </center>

    
</form>
</fieldset>

</body>
</html>