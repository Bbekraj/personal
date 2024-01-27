<?php
include "config.php";
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "INSERT INTO user(username,password)VALUES('$username','$password')";
mysqli_query($conn,$sql) or die(mysqli_error('Not create'));
header("location:login.php");
?>