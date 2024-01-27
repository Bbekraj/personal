<?php
include "config.php";
$fname = $_POST['f_name'];
$mname = $_POST['m_name'];
$lname = $_POST['l_name'];
$address = $_POST['address'];
$birthday = $_POST['birthday'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$cricket = $_POST['cricket'];
$football = $_POST['football'];
$basketball = $_POST['basketball'];
$badmintor = $_POST['badmintor'];
$gender = $_POST['gender'];
$location = $_POST['location'];
$message = $_POST['message'];
$sql = "INSERT INTO allform(fname,mname,lname,address,birthday,phone,email,password,cricket,football,
basketball,badmintor,gender,location,message)VALUES('$fname','$mname','$lname','$address','$birthday',
'$phone','$email','$password','$cricket','$football','$basketball','$badmintor','$gender','$location','$message')";
mysqli_query($conn,$sql) or die(mysqli_error('Not create'));
header("location:thank.php");
?>