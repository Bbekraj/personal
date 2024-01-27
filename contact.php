<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bbek</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <section>
        <div class="header bbek">
            <div class="logo">
                <a href="index.php">
                    B
                    <span>bek</span>
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
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>
            <div class="menu-side">
                <a href="">
                    <img src="image/menu2.png" alt="menu">
                </a>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="contact">
            <div class="contact-title">
                <h1><i><b><u><span>Contact</span> <span>Me</span></u></b></i></h1>
            </div>
            <div class="contact-main">
                <div class="contact-main-left">
                    <div class="title">
                        <img src="image/bbek.jpg" alt="">                        
                    </div>
                    <div class="contact-main-left-body">
                        <h3>Contact me</h3>
                        <ul>
                            <li><i class="fa fa-envelope"></i>bbekjaiswal@gmail.com</li>
                            <li><i class="fa fa-phone"></i>9809284525</li>
                            <li><i class="fa fa-phone"></i>+14-857934</li>
                        </ul>
                    </div>
                </div>
                <div class="contact-main-right">
                   <div class="main-form">
                    <form action="next.php" method="POST">
                        <div class="b-form">
                            <input type="text" name="name" class="finput" placeholder="Full Name" required>
                        </div>
                        <div class="b-form">
                            <input type="text" name="address" class="finput" placeholder="Enter your Address" required>
                        </div>
                        <div class="b-form">
                            <input type="email" name="email" class="finput" placeholder="Enter Email" required>
                        </div>
                        
                        <div class="b-form">
                            <textarea name="message" id="message" cols="30" rows="4" placeholder="Message" class="finput"></textarea>
                        </div>
                        <div class="b-form">
                            <button type="submit"><i class="fa fa-send"></i>SEND</button>
                        </div>
                    </form>
                   </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="footer">
            <h4>Copyright © 2022 bbekjaiswal -|- All Rights Reserved.</h4>
        </div>
    </section>
</body>
</html>