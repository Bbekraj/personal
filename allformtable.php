<?php 
session_start();
if(!isset($_SESSION['loginsuccessful']) || ($_SESSION['loginsuccessful']!=true))
{
    header('location:login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<mata name="viewport" content="width=device-width,initial scale=1.0">
	<title>Personal site</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<style>    
    body{  background: #fff;}
</style>
<body>
<section>
        <div class="header bbek">
            <div class="logo">
                <a href="index.php"> B
                    <span>bik</span>
                </a>
            </div>
            <div class="header-right">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="gallery.php">Gallary</a> </li>
                    <li><a href="skill.php">Skill</a> </li>
                    <li><a href="allform.php" target="alert">Feedback</a></li>
                    <li><a href="logout.php">logout</a></li>
                </ul>
            </div>
            <div class="menu-side">
                <a href="">
                    <img src="image/menu2.png" alt="menu">
                </a>
            </div>
        </div>
    </section>
<section>
    <div class="bbek1">
        <?php 
        include"config.php";
        $sql="SELECT * FROM allform";
        $result=mysqli_query($conn,$sql) or die(mysqli_error('error in allformtable page.'));
        if(mysqli_num_rows($result) > 0){ 
        ?>        
        <table border="1"  align="center"  cellspacing="0">
            <thead>
            <tr>
                <td>Name</td>
                <td>Mname</td>
                <td>Lname</td>
                <td>Address</td>
                <td>Phone</td>
                <td>Birthday</td>
                <td>Email</td>
                <td>Password</td>
                <td>Cricket</td>
                <td>Football</td>
                <td>Badminton</td>
                <td>Basketball</td>
                <td>Gender</td>
                <td>Location</td>
                <td>Message</td>
        
            </tr>
            </thead>

            <?php 
            while($rows=mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $rows['fname'] ?></td>
                <td><?php echo $rows['mname'] ?></td>
                <td><?php echo $rows['lname'] ?></td>
                <td><?php echo $rows['address'] ?></td>
                <td><?php echo $rows['phone'] ?></td>
                <td><?php echo $rows['birthday'] ?></td>
                <td><?php echo $rows['email'] ?></td>
                <td><?php echo $rows['password'] ?></td>

                <td>
                <?php
                if($rows['cricket'] == 'on'){
                    echo "<h5>Yes</h5>";
                }
                else{
                    echo '<h5>No</h5>';
                }
                ?>
                </td>
                <td>

                <?php
                if($rows['football'] == 'on'){
                    echo "<h5>Yes</h5>";
                }
                else{
                    echo '<h5>No</h5>';
                }
                ?>
                </td>          
                <td>
                <?php
                if($rows['badmintor'] == 'on'){
                    echo "<h5>Yes</h5>";
                }
                else{
                    echo '<h5>No</h5>';
                }
                ?>
                </td>
                
                <td>
                <?php
                if($rows['basketball'] == 'on'){
                    echo "<h5>Yes</h5>";
                }
                else{
                    echo '<h5>No</h5>';
                }
                ?>
                </td>                
                <td><?php echo $rows['gender'] ?></td>
                <td><?php echo $rows['location'] ?></td>
                <td><?php echo $rows['message'] ?></td>
        
            </tr>
            <?php 
            }
        
            ?>
        </table>
        <?php 
        }
       ?>
       
    </div>
</section>
</body>
</html>