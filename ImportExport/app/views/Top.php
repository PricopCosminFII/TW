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
                    <li><a href="home">Log Out</a></li>
                </ul>
            </div>
        </nav>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="homelog">Home</a>
            <a href="choose">Levels</a>
            <a href="profile">Profile</a>
            <a href="top">Leaderboard</a>
            <a href="home">Log Out</a>
        </div>
        <span class="menu__button" onclick="openNav()">&#9776; Menu</span>
    </header>

    <main class="main__for-article">
        <article class="profile__article-content">
            <div id="container">
                <h3>Leaderboard</h3>
                <ol>
                    <li>
                        <div class="name">Player1</div>
                        <div class="score">430</div>
                    </li>
                    <li>
                        <div class="name">Player2</div>
                        <div class="score">321</div>
                    </li>
                    <li>
                        <div class="name">Player3</div>
                        <div class="score">261</div>
                    </li>
                    <li>
                        <div class="name">Player4</div>
                        <div class="score">231</div>
                    </li>
                    <li>
                        <div class="name">Player5</div>
                        <div class="score">175</div>
                    </li>
                    <li>
                        <div class="name">Player6</div>
                        <div class="score">88</div>
                    </li>

                </ol>
            </div>
        </article>
    </main>

    <script src="public/JS/script.js"></script>
</body>

</html>