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

            <div class="sections">
                <section class="left-section"> 
                    <h4>Posted Projects</h4>
                    <?php
                        include "/app/main-model.php";

                        foreach($projects as $row){
                            echo '<p class="project-title"><strong>'.$row['title'].'</strong></p><hr/><p class="date-posted">Date Posted: '.$row['date'].'</p>';
                        }
                    ?>
                </section>

                <section class="right-section"> 
                    <?php

                        foreach($developer as $row){
                            echo '<div class="dev-container"><img class="dev-img" src"'.$row['profileimage'].'" alt="profile image" />';
                            echo '<div class="dev-text-container">';
                            echo '<h2 class="dev-name">'.$row['firstname'].' '.$row['lastname'].'</h2>';
                            echo '<p class"dev-contacts">'.'Phone: '.$row['phone'].' <br/>Email: '.$row['email'].'</p>';
                            echo '<a class="dev-link" href="../app/?action=profile&user='.$row['developerid'].'" title="" >Request</a></div></div><br/>';
                        }

                    ?>
                </section>
            </div>  
           
            <?php include 'snippets/footer.php'; ?>
        </main>
    </body>
</html>