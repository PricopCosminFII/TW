<?php
include 'app/config/lang.php';
?>

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

            <!-- <div>
                <iframe id="lecture" class="frame" src="">
                </iframe>
            </div> -->

            <div id="lecture">
                <iframe width="420" height="315" src="">
                </iframe>
            </div>

            <hr />
            <div class="quiz">
                <div>
                    <p>
                        <?php
                        if (isset($_SESSION['idHTML'])) {
                            echo $lang['question'] . $_SESSION['idHTML'];
                        } else header("Refresh:0");
                        ?>
                    </p>
                    <p id="question"></p>
                    <hr />
                    <?php
                    $idHTML = json_encode($_SESSION['idHTML']);
                    $response = file_get_contents('http://localhost:3000/questionsAPI/itemsHTML/read');
                    ?>
                    <script>
                    var id = <?php echo $idHTML ?>;
                    console.log(id);
                    var xhttp;
                        xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                document.getElementById("lecture").innerHTML = this.responseText;
                            }
                        };
                        xhttp.open("GET", "lectureHTML/insertlecture", true);
                        xhttp.send();
                    /*
                    var xhttp;
                        xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                document.getElementById("lecture").innerHTML = this.responseText;
                            }
                        };
                        xhttp.open("GET", "lectureHTML/insertlecture", true);
                        xhttp.send();*/
                    /*
                        function response() {
                            let answer;
                            var id = <?php echo $idHTML ?>;
                            //console.log(id);

                            //let json = <?php echo $response ?>;

                            //let jsonData = JSON.parse(<?php echo $response ?>);
                            //let jsonData = JSON.parse(json);
                            let jsonData = <?php echo $response ?>;

                            //jsonData = jsonData.replace(/\\/g, '');
                            
                            for (var i = 0; i < jsonData.items.length && undefined !== jsonData; i++) {
                                let item = jsonData.items[i];
                                
                                if (item.id == id) {
                                    console.log(item);
                                    document.getElementById("lecture").src = item.lecture;
                                    document.getElementById("question").innerHTML = item.question;
                                    document.getElementById("option1").innerHTML = item.option1;
                                    document.getElementById("option2").innerHTML = item.option2;
                                    document.getElementById("option3").innerHTML = item.option3;
                                    document.cookie = "answer=" + encodeURI(answer);
                                    break;
                                }
                            }
                        }
                        setTimeout(response, 0);*/
                        /*
                        var ajaxReq = $.ajax('http://localhost:3000/questionsAPI/itemsHTML/read', {
                            dataType: 'json',
                            timeout: 500
                        });

                        ajaxReq.success(function(jsonData, status, jqXhr) {
                            for (var i = 0; i < jsonData.items.length; i++) {
                                    let item = jsonData.items[i];
                                    if (item.id == id) {
                                        console.log(id);
                                        console.log(item);
                                        
                                        $('#lecture').attr("src", item.lecture);
                                       
                                        $('#question').append(item.question);
                                        $('#option1').append(item.option1);
                                        $('#option2').append(item.option2);
                                        $('#option3').append(item.option3);
                                        $('#answear').append(item.answear);
                                        
                                        answer = item.answear;
                                        document.cookie = "answer=" + encodeURI(answer);
                                        break;
                                    }
                                }
                            
                        })

                        ajaxReq.error(function(jqXhr, textStatus, errorMessage) {
                            console.log(errorMessage);
                        })
*/
                        /*
                        const xhr = new XMLHttpRequest();

                        xhr.onload = function() {
                            if (this.status === 200 && this.readyState == 4) {

                                let jsonData = JSON.parse(this.responseText);

                                for (var i = 0; i < jsonData.items.length; i++) {
                                    let item = jsonData.items[i];
                                    if (item.id == id) {
                                        console.log(id);
                                        console.log(item);
                                        document.getElementById("lecture").src = item.lecture;
                                        document.getElementById("question").innerHTML = item.question;
                                        document.getElementById("option1").innerHTML = item.option1;
                                        document.getElementById("option2").innerHTML = item.option2;
                                        document.getElementById("option3").innerHTML = item.option3;
                                        answer = item.answear;
                                        document.cookie = "answer=" + encodeURI(answer);
                                        break;
                                    }
                                }
                            } else {
                                console.log("File not found");
                            }
                        }
                        xhr.open("GET", "http://localhost:3000/questionsAPI/itemsHTML/read", true);
                        xhr.send();*/
                        /*
                                                var uri = window.location.href;
                                                var lng = <?php echo json_encode($_SESSION['lang']) ?>;
                                                var idq = <?php echo json_encode($_SESSION['idHTML']) ?>;
                                                if (uri.localeCompare('http://localhost:3000/Project/HTML?') == 0 || uri.localeCompare('http://localhost:3000/Project/HTML') == 0) {

                                                    uri = uri.concat('?id=');
                                                    uri = uri.concat(idq);
                                                    window.history.pushState({}, '', uri);
                                                } else {
                                                    var uritrim = uri.slice(0, -1);
                                                    uritrim = uritrim.concat(idq);
                                                    window.history.pushState({}, '', uri);
                                                }*/
                    </script>
                    <form method="POST" action="HTML">
                        <p><?php echo $lang['chooseanswer'] ?></p>
                        <select id='answear' name='answear'>
                            <option value="" disabled selected><?php echo $lang['chooseanswer'] ?></option>
                            <option value='option1' id='option1'></option>
                            <option value='option2' id='option2'></option>
                            <option value='option3' id='option3'></option>

                        </select>
                        <br>
                        <br>
                        <br>
                        <button type='submit' class="submit">Submit</button>
                    </form>
                </div>
                </div>
                <br>
                <br>
        </article>
        <article class="article-content">
            <div class="footer_lang">
                <a href="HTML?lang=en"><?php echo $lang['en'] ?> </a>
                | <a href="HTML?lang=ro"><?php echo $lang['ro'] ?> </a>
                | <a href="HTML?lang=fr"><?php echo $lang['fr'] ?> </a>
            </div>
        </article>
    </main>

    <script src="public/JS/script.js"></script>
</body>

</html>