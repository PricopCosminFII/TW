<?php
    include 'app/config/lang.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS</title>
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

            <div id="lecture"></div>

            <hr />
            <p><?php echo $lang['question'] . $_SESSION['idCSS'] ?></p>
            <div class="quiz">
                <div>
                    <p id="question"></p>
                    <hr />
                    <form method="POST" action="CSS">
                        <p><?php echo $lang['chooseanswer'] ?></p>
                        <select id='answear' name='answear'>
                        <option value = "" disabled selected><?php echo $lang['chooseanswer'] ?></option>
                            <option value='option1' id='option1'></option>
                            <option value='option2' id='option2'></option>
                            <option value='option3' id='option3'></option>

                        </select>
                        <br>
                        <br>
                        <br>
                        <button type='submit' class="submit">Submit</button>
                    </form>
                    <script>
                        var xhttp;
                        xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                document.getElementById("lecture").innerHTML = this.responseText;
                            }
                        };
                        xhttp.open("GET", "lectureCSS/insertlecture", true);
                        xhttp.send();
                    </script>
                </div>
                </div>
                <br>
                <br>
        </article>
        <article class = "article-content">
            <div class = "footer_lang">
            <a href = "CSS?lang=en"><?php echo $lang['en'] ?> </a>
        | <a href = "CSS?lang=ro"><?php echo $lang['ro'] ?> </a>
        | <a href = "CSS?lang=fr"><?php echo $lang['fr'] ?> </a>
            </div>
        </article>

    </main>

    <script src="public/JS/script.js"></script>
</body>

</html>