<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy Level 1</title>
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
            <h3>Lectia 1</h3>
            <section>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

            </section>
            <br>
            <br>
            <div class="code">
                <label for="code">
                    Code:
                </label>

                <!--
                <p>
                    <iframe width="100%" height="300" src="//jsfiddle.net/valentinbaltatescu/1cdLy7oe/embedded/" allowfullscreen="allowfullscreen" allowpaymentrequest frameborder="0"></iframe>
                </p>
                
                <textarea id="code" name="code" rows="7">
// cod
                </textarea>
            -->
                <input type="submit" value="Submit">
            </div>
            <div class="quiz">
                <div>
                    <h3>What fraction of a day is 6 hours?</h3>
                    <p>Choose 1 answer</p>
                    <hr />

                    <div id='block-11' class="answer">
                        <label for='option-11' class="option__quiz">
                        <input type='radio' name='option' value='6/24' id='option-11' style='transform: scale(1.6); margin-right: 10px; vertical-align: middle; margin-top: -2px;' />
                        6/24</label>
                        <span id='result-11'></span>
                    </div>
                    <hr />

                    <div id='block-12' class="answer">
                        <label for='option-12' class="option__quiz">
                        <input type='radio' name='option' value='6' id='option-12' style='transform: scale(1.6); margin-right: 10px; vertical-align: middle; margin-top: -2px;' />
                        6</label>
                        <span id='result-12'></span>
                    </div>
                    <hr />

                    <div id='block-13' class="answer">
                        <label for='option-13' class="option__quiz">
                        <input type='radio' name='option' value='1/3' id='option-13' style='transform: scale(1.6); margin-right: 10px; vertical-align: middle; margin-top: -2px;' />
                        1/3</label>
                        <span id='result-13'></span>
                    </div>
                    <hr />

                    <div id='block-14' class="answer">
                        <label for='option-14' class="option__quiz">
                        <input type='radio' name='option' value='1/6' id='option-14' style='transform: scale(1.6); margin-right: 10px; vertical-align: middle; margin-top: -2px;' />
                        1/6</label>
                        <span id='result-14'></span>
                    </div>
                    <hr />
                    <button type='button' onclick='displayAnswer1()' class="submit">Submit</button>
                </div>
                <a id='showanswer1'></a>
            </div>
            <div class="buttons__position">
                <!--
                <button class="prev">
                    <a href="#">
                        &laquo; Previous 
                    </a>
                    </button>
                -->
                <button class="forward">
                    <a href="easy2">
                        Next &raquo;
                    </a>
                </button>
            </div>
            <br>
            <br>
        </article>
    </main>

    <script src="public/JS/script.js"></script>
</body>

</html>