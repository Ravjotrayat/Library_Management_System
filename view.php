<!-- show the number books issued  -->
<?php

include "db1.php";
?>
<!DOCTYPE html>
<html>


<head>
    <title>Display all records from Database</title>
</head>

<body style="background-color: lightgreen" >
<center>
    <div style="">
    <h2>Book Details</h2>

    <table border="2">
        <tr>
            <!-- <td>ID.No.</td> -->
            <td>Book Name</td>
            <td>Book Author</td>
            <td>Book Publication</td>
            <td>Book Date</td>
            <td>Book Price</td>            
            <td>Book Quantity</td>            

        </tr>

        <?php

        $records = mysqli_query($conn, "SELECT * FROM addbook "); // fetch data from database

        while ($data = mysqli_fetch_array($records)) {
        ?>
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['author']; ?></td>
                <td><?php echo $data['publication']; ?></td>
                <td><?php echo $data['date']; ?></td>
                <td><?php echo $data['price']; ?></td>
                <td><?php echo $data['quantity']; ?></td>

 <td><a href="edit.php?name=<?php echo $data['id']; ?>">Edit</a></td>
 <td><a href="delete.php?name=<?php echo $data['id']; ?>">Delete</a></td>
            </tr>
        <?php
        }
        ?> 
    </table>

    <?php mysqli_close($conn); // Close connection 
    ?>
<br><br>
<a href="../dashboard.php">Return to Dashboard</a>
</div>
</center>
</body>

</html>