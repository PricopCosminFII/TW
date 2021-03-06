<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Learn HTML/CSS </title>
    <link rel="stylesheet" href="public/Styles/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">



</head>

<body>
    <section class="header">
        <nav class="nav__bar">
            <img src="public/Photos/logoo.png" alt="logo" class="logo">
            <div class="nav-links" id="navLinks">
                <ul>
                    <li><a href="login">Login</a></li>
                    <li><a href="authentication">Authentication</a></li>
                </ul>
            </div>
        </nav>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="login">Login</a>
            <a href="authentication">Authentication</a>
        </div>
        <span class="menu__button" onclick="openNav()">&#9776; Menu</span>


        <div class="text-box">
            <h1> Welcome to learn HTML/CSS </h1>
            <p>You've Found the Easiest Way to Learn HTML and CSS. Making website is now one of the easiest thing in the world. <br> You just need to learn HTML and CSS and you are good to go.

            </p>
        </div>

    </section>

    <!----------------------course-------------------->

    <section class="course">
        <h1>This WebSite We Offer</h1>
        <p>To Learn HTML and CSS very quickly</p>

        <div class="row">
            <div class="course-col">
                <h3>Easy</h3>
                <P>Having the knowledge to build your own website with HTML and CSS gives you the chance to stand out from the crowd with an authentic, hand-crafted representation of your business, or any business for that matter. Save money on every site
                    you may want to build in the future, and build better websites with HTML and CSS.</P>
            </div>
            <div class="course-col">
                <h3>Intermediate</h3>
                <P>Having the knowledge to build your own website with HTML and CSS gives you the chance to stand out from the crowd with an authentic, hand-crafted representation of your business, or any business for that matter. Save money on every site
                    you may want to build in the future, and build better websites with HTML and CSS.</P>
            </div>
            <div class="course-col">
                <h3>Hard</h3>
                <P>Having the knowledge to build your own website with HTML and CSS gives you the chance to stand out from the crowd with an authentic, hand-crafted representation of your business, or any business for that matter. Save money on every site
                    you may want to build in the future, and build better websites with HTML and CSS.</P>
            </div>
        </div>


    </section>


    <script src="public/JS/script.js"></script>

</body>

</html>