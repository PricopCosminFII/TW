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
                <label>Username</label>
                <input type="text" class="input" name="username">
            </div>
            <div class="inputfield">
                <label>Email Address</label>
                <input type="text" class="input" name="email">
            </div>
            <div class="inputfield">
                <label>First Name</label>
                <input type="text" class="input" name="firstname">
            </div>
            <div class="inputfield">
                <label>Last Name</label>
                <input type="text" class="input" name="lastname">
            </div>
            <div class="inputfield">
                <label>Password</label>
                <input type="password" class="input" name="password">
            </div>
           
            <div class="inputfield">
                <label>Gender</label>
                <div class="custom_select">
                    <select name="gender">
              <option value="Unknown">Unknown</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
                </div>
           
            </div>
            <div class="inputfield">
            <p id="error"></p>
                
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

</body>

</html>