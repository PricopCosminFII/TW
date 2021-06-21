<?php
    include 'app/config/lang.php';
        
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="public/Styles/styles.css" />
</head>

<body class="body__background">
    <header>
    <nav class="nav__bar">
            <img src="public/Photos/logoo.png" alt="logo" class="logo">
            <div class="nav-links" id="navLinks">
                <ul>
                    <li><a href="homelog?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['home'] ?></a></li>
                    <li><a href="choose?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['levels'] ?></a></li>
                    <li><a href="profile?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['profile'] ?></a></li>
                    <li><a href="top?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['top'] ?></a></li>
                    <li><a href="logout?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['logout'] ?> </a></li>
                </ul>
            </div>
        </nav>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="homelog?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['home'] ?></a>
            <a href="choose?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['levels'] ?></a>
            <a href="profile?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['profile'] ?></a>
            <a href="top?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['top'] ?></a>
            <a href="logout?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['logout'] ?> </a>
        </div>
        <span class="menu__button" onclick="openNav()">&#9776; Menu</span>
    </header>

    <main class="main__for-article">
        <article class="profile__article-content">
            <section class="section__profile-card">
                <div class="profile__card">
                    <img src="public/Photos/login.png" alt="profile__photo" style="width:100%">
                    <h1 id="username"><?php echo $lang['firstname'] ?> <?php echo $lang['lastname'] ?> </h1>
                    <p class="profile__text" id="gender" name="gender"></p>
                    <p class="profile__text" id="name" name="name"><?php echo $lang['firstname'] ?> </p>
                    <div style="margin: 23px 0;" >
                        
                            <img src='public/Photos/white.png' class="profile__github" id="image">
                       
                    </div>
                </div>
            </section>
            <section class="stats">
                <h2 class="stats__title">Status HTML</h2>
                <div class="stats__show">
                    <p class="stats__text" id='progresHTML'>TBD</p>
                    <p id='placeHTML'>TBD</p>
                </div>
                <h2 class="stats__title">Status CSS</h2>
                <div class="stats__show">
                    <p class="stats__text" id='progresCSS'>TBD</p>
                    <p  id='placeCSS'>TBD</p>
                </div>
               

            </section>
        </article>
        <article class = "article-content">
            <div class = "footer_lang">
            <a href = "profile?lang=en"><?php echo $lang['en'] ?> </a>
        | <a href = "profile?lang=ro"><?php echo $lang['ro'] ?> </a>
        | <a href = "profile?lang=fr"><?php echo $lang['fr'] ?> </a>
            </div>
        </article>
        
    </main>
    <script src="public/JS/script.js"></script>
</body>

</html>