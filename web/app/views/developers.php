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
            <?php

                foreach($developer as $row){
                    echo '<a class="dev-container-link"><img class="dev-img" src"'.$row['profileimage'].'" alt="profile image" /></a>';
                }

            ?>
           
            <?php 
                 include $_SERVER['DOCUMENT_ROOT'].'/app/snippets/footer.php';
                
                
            ?>
        </main>
    </body>
</html>