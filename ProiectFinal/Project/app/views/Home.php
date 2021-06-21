<?php
    include 'app/config/lang.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Learn HTML/CSS </title>
    <link rel="stylesheet" href="public/Styles/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">



</head>

<body>
    <section class="header">
        <nav class="nav__bar">
            <img src="public/Photos/logoo.png" alt="logo" class="logo">
            <div class="nav-links" id="navLinks">
                <ul>
                    <li><a href="login?lang=<?php echo $_SESSION['lang'] ?>">Login</a></li>
                    <li><a href="authentication?lang=<?php echo $_SESSION['lang'] ?>">Authentication</a></li>
                </ul>
            </div>
        </nav>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="login">Login</a>
            <a href="authentication">Authentication</a>
        </div>
        <span class="menu__button" onclick="openNav()">&#9776; Menu</span>


        <div class="text-box">
            <h1> <?php echo $lang['welcome'] ?> </h1>
            <p><?php echo $lang['welcome1'] ?> <br> <?php echo $lang['welcome2'] ?>

            </p>

           
        </div>

    </section>

    <!----------------------course-------------------->

    <section class="course">
        <h1><?php echo $lang['subwelcome'] ?></h1>
        <p><?php echo $lang['subwelcome1'] ?></p>

        <div class="row">
            <div class="course-col">
                <h3><?php echo $lang['easy'] ?></h3>
                <P><?php echo $lang['info'] ?></P>
            </div>
            <div class="course-col">
                <h3><?php echo $lang['intermediate'] ?></h3>
                <P><?php echo $lang['info'] ?></P>
            </div>
            <div class="course-col">
                <h3>Ha<?php echo $lang['hard'] ?>rd</h3>
                <P><?php echo $lang['info'] ?></P>
            </div>
        </div>
        <div>
        <a href = "logout?lang=en"><?php echo $lang['en'] ?> </a>
        | <a href = "logout?lang=ro"><?php echo $lang['ro'] ?> </a>
        | <a href = "logout?lang=fr"><?php echo $lang['fr'] ?> </a>
        </div>
    </section>

    <script src="public/JS/script.js"></script>

</body>

</html>