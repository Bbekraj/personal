<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<style>
body{background:#fff;}
</style>
<body>
<section>

        <div class="header bbek">
            <div class="logo">
                <a href="index.php">B<span>raj</span></a>
            </div>
            <div class="header-right">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="gallery.php">Gallary</a> </li>
                    <li><a href="skill.php">Skill</a> </li>
                    <li><a href="allform.php">Feedback</a> </li>
                     <li><a href="login.php">Login</a></li>
                </ul>
            </div>
            <div class="menu-side">
                <a href=""><img src="image/menu2.png" alt="menu"></a>
            </div>
        </div>
    </section>
<section>    
    <div class="all-form">
        <div class="title">
            <h2>All Form</h2>
        </div>
        <form action="allnext.php" method="POST" class="bbek">
              <div class="b-form">
                <label for="f_name">First Name</label><br>
                <input type="text" name="f_name" class="finput" placeholder="First Name" required>
              </div>
              <div class="b-form">
                <label for="l_name">Middle Name</label><br>
                <input type="text" name="m_name" class="finput" placeholder="Middle Name" >
              </div>
              <div class="b-form">
                <label for="l_name">Last Name</label><br>
                <input type="text" name="l_name" class="finput" placeholder="Last Name" required>
              </div>
              <div class="b-form">
                  <label for="address">Address</label><br>
                  <input type="text" name="address" class="finput" placeholder="Enter your Address" required>
              </div>
               <div class="b-form">
                  <label for="birthday">Birthday</label><br>
                  <input type="date" name="birthday" class="finput" id="birthday" placeholder="Enter your Brithdate" required>
              </div>
              <div class="b-form">
                   <label for="phone">Phone</label><br>
                   <input type="number" name="phone" class="finput" placeholder="Enter phone" id="phone"  required>
              </div>
              <div class="b-form">
                   <label for="email">Email</label><br>
                   <input type="email" name="email" class="finput" placeholder="Enter Email" required>
              </div>
              <div class="b-form">
                   <label for="password">New Password</label><br>
                   <input type="password" name="password" class="finput" placeholder="Enter password" autocomple="off" required>
              </div>
              <div class="b-checkbox">
                <label class="fav">Favorite Game</label><br>
                <input type="checkbox" name="cricket" class="cinput"  > <span>Cricket</span>
                <input type="checkbox" name="football" class="finput"  > <span>football</span>
                <input type="checkbox" name="basketball" class="finput"  > <span>basketball</span>
                <input type="checkbox" name="badmintor" class="finput"  > <span>badmintor</span>
              </div> 
              <div class="b-checkbox">
                <label class="fav">Gender</label><br>
                <input type="radio" name="gender" class="cinput" value="male"> <span>Male</span>
                <input type="radio" name="gender" class="cinput" value="femal"> <span>Female</span>
                <input type="radio" name="gender" class="cinput" value="other"> <span>Other</span>
              </div> 
              <div class="b-form">
                   <label for="text">Location</label><br>
                   <input type="text" name="location" class="finput" placeholder="Enter Your Location" required>
              </div>   
               <div class="b-form">
                   <label for="message">Message</label><br>
                   <textarea name="message" id="message" cols="30" rows="4" placeholder="Message" class="finput"></textarea>
                </div>
                <div class="b-form">
                    <button type="submit" name="save"><i class="fa fa-send"></i>SUBMIT</button>
                </div>
                <div class="b-form">
                    <button type="reset"><i class="fa fa-send "></i>RESET</button>
                </div>
        </form>  
        
        
    </div>             
        
    </section>
    <section>
        <div class="footer">
            <h4>Copyright © 2022 bbekjaiswal -|- All Rights Reserved.</h4>
        </div>
    </section>
</body>
</html>