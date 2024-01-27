<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<style>
    body { background: lightblue url("image/one.avif") no-repeat fixed center; }
</style>
<body>
    <section>
        <div class="login">
            <div class="title">
                <h2><u>Create</u></h2>
            </div>
            <div class="login-body">
                <form action="register.php" method="POST">
                    <div class="l-one">
                       <label for="username">Username</label><br>
                       <input type="text" name="username"  class="l-input" placeholder="Enter username" required>
                    </div>
                    <div class="l-one">
                       <label for="username">Password</label><br>
                       <input type="password" name="password"  class="l-input" placeholder="Enter password" required>
                    </div>
                    <div class="l-one create">                       
                       <button type="submit" name="submit"><i class="fa fa-sign-in"></i>Submit</button>
                    </div>
                    <div class="l-one"></div>
                </form>
            </div>
        </div>
    </section>
    
</body>
</html>