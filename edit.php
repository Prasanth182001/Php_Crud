<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"Home");

$id = $_GET['id'];
$sql = "select * from Products_A where Id = '$id' ";
$run = mysqli_query($connection,$sql);

while($row=mysqli_fetch_array($run))
{
    $id = $row['Id'];
    $name = $row['Product_Name'];
    $model = $row['Product_Model'];
    $price = $row['Product_Price'];
}

?>
<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"Home");

if(isset($_POST['submit']))
{
    $id = $_POST["id"];
    $name = $_POST["name"];
    $model = $_POST["model"];
    $price = $_POST["price"];

    $sql = "update Products_A set Product_Name='$name',Product_Model='$model',Product_Price='$price' where Id='$id'";

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
    <title>Edit Page</title>
</head>
<body>
    <h1>Edit Products Details</h1>
    <form action="edit.php" method='post'>
        <lable>Product Id</lable><br>
        <input type="number" name='id' required='' readonly="" value=<?php echo $id ?>><br>
        <lable>Product Name</lable><br>
        <input type="text" name='name' required='' value=<?php echo $name ?>><br>
        <lable>Product Model</lable><br>
        <input type="text" name='model' required='' value=<?php echo $model ?>><br>
        <lable>Product Price</lable><br>
        <input type="number" name='price' required='' value=<?php echo $price ?>><br>
        <input type="submit" name='submit'><br>
    </form>
</body>
</html>