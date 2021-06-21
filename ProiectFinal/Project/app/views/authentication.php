<?php
    include 'app/config/lang.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentication</title>
    <link rel="stylesheet" href="public/Styles/loginregister.css">
</head>

<body>

    <div class="wrapper">
        <div class="title">
            Register
        </div>

        <form class="form" method="POST" action="authentication">
            <div class="inputfield">
                <label><?php echo $lang['username1'] ?></label>
                <input type="text" class="input" name="username">
            </div>
            <div class="inputfield">
                <label><?php echo $lang['email'] ?></label>
                <input type="text" class="input" name="email">
            </div>
            <div class="inputfield">
                <label><?php echo $lang['firstname'] ?></label>
                <input type="text" class="input" name="firstname">
            </div>
            <div class="inputfield">
                <label><?php echo $lang['lastname'] ?></label>
                <input type="text" class="input" name="lastname">
            </div>
            <div class="inputfield">
                <label><?php echo $lang['password'] ?></label>
                <input type="password" class="input" name="password">
            </div>
           
            <div class="inputfield">
                <label><?php echo $lang['gender'] ?></label>
                <div class="custom_select">
                    <select name="gender">
              <option value="Unknown"><?php echo $lang['Unknown'] ?></option>
              <option value="Male"><?php echo $lang['Male'] ?></option>
              <option value="Female"><?php echo $lang['Female'] ?></option>
            </select>
                </div>
           
            </div>
            <div class="inputfield">
            <p id="error" class="error" style="color:rgb(184, 63, 63);"></p>
                
            </div>

            <div class="inputfield">
                <button type="submit" value="REGISTER" class="btn">REGISTER </button>
            </div>
           
            <div class="inputfield">
             <p style="text-align:center;"> <a href="oauth">  <img src="public/Photos/GitHub-logo.png"  width=50px
    height=50px   >  </a> </p>
            </div>
            
            </div>
          
        </form>
    </div>
    <div>
        <a href = "authentication?lang=en"><?php echo $lang['en'] ?> </a>
        | <a href = "authentication?lang=ro"><?php echo $lang['ro'] ?> </a>
        | <a href = "authentication?lang=fr"><?php echo $lang['fr'] ?> </a>
    </div>
</body>

</html>