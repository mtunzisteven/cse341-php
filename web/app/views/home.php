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

            <p class="intro">This application will help you get a developer to complete your project. Just select a developer and request their services.</p>
            <div class="sections">
                <section class="left-section"> 
                    <h4>Projects</h4>
                    <?php
                        include "/app/main-model.php";

                        foreach($projects as $row){
                            echo '<p class="project-title"><strong>'.$row['title'].'</strong></p><hr/><p class="date-posted">'.$row['datePosted'].'</p>';
                        }
                    ?>
                </section>

                <section class="right-section"> 
                    <h4>Developers</h4>
                    <?php

                        foreach($developer as $row){
                            echo '<div class="dev-container"><img class="dev-img" src"'.$row['profileimage'].'" alt="profile image" />';
                            echo '<div class="dev-text-container">';
                            echo '<h2 class="dev-name">'.$row['firstname'].' '.$row['lastname'].'</h2>';
                            echo '<p class"dev-contacts">'.'Phone: '.$row['phone'].' Email: '.$row['email'].'</p>';
                            echo '<a class="dev-link" href="../?action=profile&user='.$row['username'].'" title="" >View Profile</a></div></div><br/>';
                        }

                    ?>
                </section>
            </div>  
           
            <?php include 'snippets/footer.php'; ?>
        </main>
    </body>
</html>