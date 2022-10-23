<?php

include "db1.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Display all records of Students</title>
</head>

<body style="background-color:lightgreen"; >
<center>
    <h2>View Student Details</h2>

    <table border="2">
        <tr>
            <td>ID. No.</td>
            <td>Name</td>
            <td>Roll No.</td>
            <td>Department</td>
            <td>Semester</td>
            <td>Contact</td>
            <td>Email</td>

        </tr>

        <?php

        $records = mysqli_query($conn, "SELECT * FROM addstudent"); // fetching data from database

        while ($data = mysqli_fetch_array($records)) 
        {
        ?>
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['name']; ?></td>
                <td><?php echo $data['roll']; ?></td>
                <td><?php echo $data['dept']; ?></td>
                <td><?php echo $data['sem']; ?></td>
                <td><?php echo $data['contact']; ?></td>
                <td><?php echo $data['email']; ?></td>

                <td><a href="edit1.php?id=<?php echo $data['id']; ?>">Edit</a></td>
                <td><a href="delete1.php?id=<?php echo $data['id']; ?>">Delete</a></td>
            </tr>
        <?php
        }
        ?>
    </table>

    <?php mysqli_close($conn); // Close connection 
    ?>
<!-- <a href="../dashboard.php">Return to Dashboard</a> <br><br> -->
<div>
<!-- <a href=".//adds1.html">To add more books</a> -->
</div>
<br>
<a href="../dashboard.php">Return to Dashboard</a></center>
</body>

</html>