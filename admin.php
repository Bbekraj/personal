<?php 
 include "config.php";
 $username=$_POST['username'];
 $password=$_POST['password'];

 $sql ="SELECT * FROM user where username='$username' and password='$password' ";
 $result=mysqli_query($conn,$sql) or die('admin page error');
 if(mysqli_num_rows($result))
 {
    session_start();    
    $_SESSION['loginsuccessful']=true;
    header('location:allformtable.php');
    exit;
 }
 else{
    header('location:login.php');
 }
?>