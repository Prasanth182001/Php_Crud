<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Crud Operation</title>
</head>
<body>
    <h1>Products Detailes</h1>
    <a href="add.php">Add Data</a>
    <table border='1' width="100%">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Model</th>
            <th>Price</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"Home");

        $sql = "select * from Products_A ";

        $run = mysqli_query($connection,$sql);

        $id = 1;
        while($row=mysqli_fetch_array($run))
        {
            $id = $row['Id'];
            $name = $row['Product_Name'];
            $model = $row['Product_Model'];
            $price = $row['Product_Price'];

            ?>
            <tr>
                <td><?php echo $id ?></td>
                <td><?php echo $name ?></td>
                <td><?php echo $model ?></td>
                <td><?php echo $price ?></td>
                <td><a href="edit.php?id=<?php echo $id?>">Edit</a></td>
                <td><a href="delete.php?id=<?php echo $id?>">Delete</a></td>
            </tr>
            <?php
            $id++
        }
        
        ?>
    </table>
</body>
</html>
