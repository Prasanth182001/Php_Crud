<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'Home');

if(isset($_POST['submit']))
{
    $name = $_POST["name"];
    $model = $_POST["model"];
    $price = $_POST["price"];

    $sql = "insert into Products_A (Product_Name,Product_Model,Product_Price) value ('$name','$model','$price')";

    if(mysqli_query($connection,$sql))
    {
        echo "<script>location.replace('index.php')</script>";
    }else
    {
        echo "Something Error".$connection->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Page</title>
</head>
<body>
    <h1>Add Products Details</h1>
    <form action="add.php" method='post'>
        <lable>Product Name</lable><br>
        <input type="text" name='name' required=''><br>
        <lable>Product Model</lable><br>
        <input type="text" name='model' required=''><br>
        <lable>Product Price</lable><br>
        <input type="number" name='price' required=''><br>
        <input type="submit" name='submit'><br>
    </form>
</body>
</html>