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
                <label>Username</label>
                <input type="text" class="input" name="username">
            </div>

            <div class="inputfield">
                <label>Password</label>
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
                <p>If you don't have an account go to <a href="authentication">REGISTER </a>!</p>
                
            </div>
            <div class="inputfield">
            <p id="error"></p>
                
            </div>
           
        </form>
    </div>

</body>

</html>