<!doctype html>
<html lang="en-us">
    <head>
        <title>home</title>
        <meta charset="utf-8">
        <meta content="width=device-width,initial-scale=1,shrink-to-fit=no" name="viewport">
        <link href="/app/css/style.css" media="screen" rel="stylesheet">
    </head>
    <body>
        <main class="content">
            <?php include 'snippets/header.php'; ?>
            <?php include 'snippets/navigation.php'; ?>

            <div class="hero">     
                <h1 id="title">Home</h1>
            </div>
            <h4>Developers</h4>
            <?php

                foreach($developer as $row){
                    echo '<a class="dev-container-link"><img class="dev-img" src"'.$row['profileimage'].'" alt="profile image" /></a>';
                }

            ?>
           
            <?php include 'snippets/footer.php'; ?>
        </main>
    </body>
</html>