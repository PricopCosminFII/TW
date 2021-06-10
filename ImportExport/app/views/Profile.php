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
            <section class="section__profile-card">
                <div class="profile__card">
                    <img src="public/Photos/login.png" alt="profile__photo" style="width:100%">
                    <h1 id="username">Name Surname</h1>
                    <p class="profile__text" id="gender" name="gender"></p>
                    <p class="profile__text" id="name" name="name">Firstname</p>
                    <div style="margin: 23px 0;" >
                        
                            <img src='public/Photos/white.png' class="profile__github" id="image">
                       
                    </div>
                </div>
            </section>
            <section class="stats">
                <h2 class="stats__title">Stats</h2>
                <div class="stats__show">
                    <p class="stats__text">TBD</p>
                    <p>TBD</p>
                </div>
                <div class="stats__show">
                    <p class="stats__text">TBD</p>
                    <p>TBD</p>
                </div>
                <div class="stats__show">
                    <p class="stats__text">TBD</p>
                    <p>TBD</p>
                </div>
                <div class="stats__show">
                    <p class="stats__text">TBD</p>
                    <p>TBD</p>
                </div>
                <div class="stats__show">
                    <p class="stats__text">TBD</p>
                    <p>TBD</p>
                </div>

            </section>
        </article>
    </main>

    <script src="public/JS/script.js"></script>
</body>

</html>