<?php
include "config.php";

$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$message=$_POST['message'];
$sqli="insert into one(name,address,email,message)values('$name','$address','$email','$message')";
mysqli_query($conn,$sqli) or die(mysqli_error('not insert'));
header('location:thank.php')
?>