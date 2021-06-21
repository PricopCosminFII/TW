<?php
    include 'app/config/lang.php';

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Levels</title>
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
        <article class="article-content">
            <h3>
            <?php echo $lang['ourcourses'] ?>
            </h3>
            <section class="section__choose">
                <p id='1'>
                <?php echo $lang['coursesinfo'] ?>
                </p>
            </section>
            
            <br>
            <section class="section__choose">
            <div class="dropdown">
                    <form action="HTML">

                        <a href = "HTML?lang=<?php echo $_SESSION['lang'] ?>" class = "dropdown-button"><img src="public/Photos/html.png" class="image-dropdown"> HTML</a>
                    </form>
                </div>
                <div class="dropdown">
                    <form action="CSS">
                        <a href = "CSS?lang=<?php echo $_SESSION['lang'] ?>" class = "dropdown-button"><img src="public/Photos/css.png" class="image-dropdown">CSS</a>
                    </form>
                </div>
            </section>
            <br>
            <br>
            <br>
            <br>
            <br>
        </article>
        <article class = "article-content">
                <div class = "footer_lang">
                <a href = "choose?lang=en"><?php echo $lang['en'] ?> </a>
        | <a href = "choose?lang=ro"><?php echo $lang['ro'] ?> </a>
        | <a href = "choose?lang=fr"><?php echo $lang['fr'] ?> </a>
                </div>
            </article>
    </main>

    <script src="public/Script/script.js"></script>
</body>

</html>