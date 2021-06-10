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

            <p id="lecture"></p>

            <hr />
            <div class="quiz">
                <div>
                    <p id="question"></p>
                    <hr />
                    <form method="POST" action="HTML">
                   <select id='answear' name='answear'>
                   <option value='option1' id='option1'></option>
                   <option value='option2' id='option2'></option>
                   <option value='option3' id='option3'></option>
                   
                   </select>
                   <button type='submit'  class="submit">Submit</button>
                   </form>
                    <!-- <div id='block-11' class="answer">
                        <input type='radio' name='option' id='option-11' style='transform: scale(1.6); margin-right: 10px; vertical-align: middle; margin-top: -2px;' />
                        <label for='option-11' class="option__quiz" id='option1'>

                            6/24</label>
                        <span id='result-11'></span>
                    </div>
                    <hr />

                    <div id='block-12' class="answer">
                    <input type='radio' name='option' id='option-12' style='transform: scale(1.6); margin-right: 10px; vertical-align: middle; margin-top: -2px;' />
                        <label for='option-12' class="option__quiz" id='option2'>
                            
                            6</label>
                        <span id='result-12'></span>
                    </div>
                    <hr />

                    <div id='block-13' class="answer">
                        <input type='radio' name='option' id='option-13' style='transform: scale(1.6); margin-right: 10px; vertical-align: middle; margin-top: -2px;' />
                        <label for='option-13' class="option__quiz" id='option3'>

                            1/3</label>
                        <span id='result-13'></span>
                    </div>
                    <hr />
                    
                </div>
                <a id='showanswer1'></a> -->
            </div>

            <br>
            <br>
        </article>

    </main>

    <script src="public/JS/script.js"></script>
</body>

</html>