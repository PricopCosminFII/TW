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
        <article class="article-content">
            <h3>
                Our courses
            </h3>
            <section class="section__choose">
                <p id='1'>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                    survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                    with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </section>
            <section class="section__choose">
                <p>
                    !!! Am facut linkarea doar pentru Easy la HTML/CSS cu aceleasi pagini ca am zis sa nu fie prea multe pagini acum ca oricum vor fi la fel, dar ele vor fi adaugate ulterior.
                </p>
            </section>
            <br>
            <section class="section__choose">
                <div class="dropdown">
                    <form action="HTML">

                        <button class="dropdown-button" type="submit"><img src="public/Photos/html.png" class="image-dropdown"> HTML</button>
                    </form>
                </div>
                <div class="dropdown">
                    <form action="CSS">
                        <button class="dropdown-button" type="submit"><img src="public/Photos/css.png" class="image-dropdown">CSS</button>
                    </form>
                </div>
            </section>
            <br>
            <br>
            <br>
            <br>
            <br>
        </article>
    </main>

    <script src="public/Script/script.js"></script>
</body>

</html>