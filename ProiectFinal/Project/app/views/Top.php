<?php
    include 'app/config/lang.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
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
    <script>
        var xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("container").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "topusers/top", true);
        xhttp.send();
    </script>
    <main class="main__for-article">
        <article class="profile__article-content">
            <div id="container">

            </div>
        </article>
        <article class = "article-content">
            <div class = "footer_lang">
            <a href = "top?lang=en"><?php echo $lang['en'] ?> </a>
        | <a href = "top?lang=ro"><?php echo $lang['ro'] ?> </a>
        | <a href = "top?lang=fr"><?php echo $lang['fr'] ?> </a>
            </div>
        </article>
    </main>

    <script src="public/JS/script.js"></script>
</body>

</html>