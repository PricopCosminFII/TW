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
                    <li><a href="homelog">Home</a></li>
                    <li><a href="choose">Levels</a></li>
                    <li><a href="profile">Profile</a></li>
                    <li><a href="top">Leaderboard</a></li>
                    <li><a href="logout">Log Out</a></li>
                </ul>
            </div>
        </nav>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="homelog">Home</a>
            <a href="choose">Levels</a>
            <a href="profile">Profile</a>
            <a href="top">Leaderboard</a>
            <a href="logout">Log Out</a>
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
    </main>

    <script src="public/JS/script.js"></script>
</body>

</html>