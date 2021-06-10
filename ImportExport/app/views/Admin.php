<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Levels</title>
    <link rel="stylesheet" href="public/Styles/styles.css" />
</head>

<body class="body__background">
    <header style="padding-bottom: 10rem;"></header>
    <main class="main__for-article">
        <article class="article-content">
            <h3>
                Upload database new info into HTML questions:
            </h3>
            <form action="app\controllers\uploadhtml.php" method="post" enctype="multipart/form-data">
            Select a file:
                <input type="file" name="the_file" id="fileToUpload">
                <br>
                <input type="submit" name="submit" value="Upload">
            </form>
            
            <br>
            <h3>
                Upload database new info into CSS questions:
            </h3>
            <form action="app\controllers\uploadcss.php" method="post" enctype="multipart/form-data">
            Select a file:
                <input type="file" name="the_file" id="fileToUpload">
                <br>
                <input type="submit" name="submit" value="Upload">
            </form>

            <h3>
                Download database info:
            </h3>
            <a href = "app\controllers\download.php" > Download </a>
        </article>
    </main>

    <script src="public/Script/script.js"></script>
</body>

</html>