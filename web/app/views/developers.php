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
            <?php include '../snippets/header.php'; ?>
            <?php include '../snippets/navigation.php'; ?>

            <div class="hero">     
                <h1 id="title">Developers</h1>
            </div>
            <?php

                foreach($developer as $row){
                    echo '<a class="dev-container-link"><img class="dev-img" src"'.$row['profileimage'].'" alt="profile image" /></a>';
                }

            ?>
           
            <?php 
                $footer=''; if($_SESSION('dev_firstname')!=null){$footer = '../snippets/footer.php';}else{$footer = 'snippets/footer.php';}
                include $footer;
            ?>
        </main>
    </body>
</html>