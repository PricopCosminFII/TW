<?php
    include 'app/config/lang.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="public/Styles/loginregister.css">
</head>

<body>

    <div class="wrapper">
        <div class="title">
            Login
        </div>

        <form class="form" method="POST" action="login">

            <div class="inputfield">
                <label><?php echo $lang['username1'] ?></label>
                <input type="text" class="input" name="username">
            </div>

            <div class="inputfield">
                <label><?php echo $lang['password'] ?></label>
                <input type="password" class="input" name="password">
            </div>
            <div class="inputfield">
                <button type="submit" value="LOGIN" class="btn">LOGIN </button>
            </div>
            <div class="inputfield">
            <p style="text-align:center;"> <a href="oauth">  <img src="public/Photos/GitHub-logo.png"  width=50px
    height=50px   >  </a> </p>
            </div>
            <div class="inputfield">
                <p><?php echo $lang['loginmessage'] ?> <a href="authentication">REGISTER </a>!</p>
                
            </div>
            <div class="inputfield">
            <p id="error" class="error" style="color:rgb(184, 63, 63);"></p>
                
            </div>
           
        </form>
        
    </div>
    
    <div>
        <a href = "login?lang=en"><?php echo $lang['en'] ?> </a>
        | <a href = "login?lang=ro"><?php echo $lang['ro'] ?> </a>
        | <a href = "login?lang=fr"><?php echo $lang['fr'] ?> </a>
    </div>
</body>

</html>