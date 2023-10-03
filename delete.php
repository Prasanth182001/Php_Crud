<?php

$connection = mysqli_connect("localhost","root",'');
$db = mysqli_select_db($connection,"Home");

$id = $_GET['id'];

$sql = "delete from Products_A where Id ='$id' ";

if(mysqli_query($connection,$sql))
{
    echo "<script>location.replace('index.php')</script>";
}else
{
    echo "Something Error".$connection->error;
}

?>