<?php session_start();?>

<!doctype html>
<html lang="en-us">
    <head>
        <title>Developers</title>
        <meta charset="utf-8">
        <meta content="width=device-width,initial-scale=1,shrink-to-fit=no" name="viewport">
        <link href="/app/css/style.css" media="screen" rel="stylesheet">
    </head>
    <body>
        <main class="content">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/app/snippets/header.php'; ?>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/app/snippets/navigation.php'; ?>

            <div class="hero">     
                <h1 id="title">Developers</h1>
            </div>
            <div class="dev-img-link-container">
            <?php

                foreach($developer as $row){
                    echo '<div class="per-dev-holder">';
                    echo '<a class="dev-img-link" href="?action=developer"><img class="dev-page-img" src="images/'.$row['profileimage'].'" alt="profile image" /></a>';
                    echo '<h4 class="center dev-countries">'.$row['country'].'</h4>';
                    echo '<i class="center dev-cities">'.$row['city'].'</i>';
                    echo '</div>';
                }

            ?>
            </div>
           
            <?php 
                 include $_SERVER['DOCUMENT_ROOT'].'/app/snippets/footer.php';
                
                
            ?>
        </main>
    </body>
</html>