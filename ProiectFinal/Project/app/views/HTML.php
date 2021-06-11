<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML</title>
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

    <main class="main__for-article">
        <article class="article-content">

            <div id="lecture">
                <iframe width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe>
            </div>

            <hr />
            <div class="quiz">
                <div>
                    <p id="question"></p>
                    <hr />
                    <form method="POST" action="HTML">
                        <P>Choose answear:</P>
                        <select id='answear' name='answear'>
                            <option value = "" disabled selected>Choose answer</option>
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
                        xhttp.open("GET", "lectureHTML/insertlecture", true);
                        xhttp.send();
                    </script>
                </div>

                <br>
                <br>
        </article>

    </main>

    <script src="public/JS/script.js"></script>
</body>

</html>