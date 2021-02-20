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
            <?php include $_SERVER['DOCUMENT_ROOT'].'/app/snippets/header.php'; ?>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/app/snippets/navigation.php'; ?>

            <div class="hero">     
                <h1 id="title">Home</h1>
            </div>

            <div class="sections">
                <section class="left-section"> 
                    <h4>Posted Projects</h4>
                    <?php
                        foreach($projects as $row){
                            echo '<p class="project-title"><strong>'.$row['title'].'</strong></p><hr/><p class="date-posted">Date Posted: '.$row['date'].'</p><br/>';
                        }
                    ?>
                </section>

                <section class="right-section"> 
                    <?php
                        foreach($developer as $row){
                            echo  '<div class="dev-container"><img class="dev-img" src="images/'.$row['profileimage'].'" alt="profile image" />'; 
                                echo  '<div class="dev-text-container">';
                                    echo  '<h2 class="dev-name">'.$row['firstname'].' '.$row['lastname'].'</h2>';
                                    echo  '<p class"dev-contacts">'.'Phone: '.$row['phone'].' <br/>Email: '.$row['email'].'</p>';
                                    echo  '<a class="dev-link" href="../app/account/index.php?action=profile&user='.$row['developerid'].'" title="Request a Developer" >Request</a></div>';
                                echo  '<div class="dev-text-container"><h4 class="center dev-countries">'.$row['country'].'</h4>';
                                     echo  '<i class="center dev-cities">'.$row['city'].'</i></div>';
                            echo  '</div><br/>';
                        }
                    ?>
                </section>
            </div>  
           
            <?php include $_SERVER['DOCUMENT_ROOT'].'/app/snippets/footer.php'; ?>
        </main>
    </body>
</html>