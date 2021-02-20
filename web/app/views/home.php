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
                        foreach($projects as $row){ // This value is from main model via controller
                            echo '<p class="project-title"><strong>'.$row['title'].'</strong></p><hr/><p class="date-posted">Date Posted: '.$row['date'].'</p><br/>';
                        }
                    ?>
                </section>

                <section class="right-section"> 
                    <?php
                        foreach($developer as $row){ // This value is from main model via controller

                            $card = '<div class="dev-container">';
                            $card.=     '<img class="dev-img" src="images/'.$row['profileimage'].'" alt="profile image" />';
                            $card.=     '<div class="dev-text-container">';
                            $card.=         '<h2 class="dev-name">'.$row['firstname'].' '.$row['lastname'].'</h2>';
                            $card.=         '<div class="dev-inner-container">'; 
                            $card.=             '<div class="dev-contacts-container">'; 
                            $card.=                 '<p class="dev-contacts">Phone: '.$row['phone'].' </p>';
                            $card.=                 '<p class="dev-contacts">Email: '.$row['email'].'</p>';
                            $card.=             '</div>';
                            $card.=             '<div class="dev-location-container">';
                            $card.=                 '<h4 class="dev-countries">'.$row['country'].'</h4>';
                            $card.=                 '<i class="dev-cities">'.$row['city'].'</i>';
                            $card.=             '</div>';
                            $card.=             '<a class="dev-link" href="../app/account/index.php?action=profile&user='.$row['developerid'].'" title="Request a Developer" >Request</a>';
                            $card.= '</div></div></div><br/>';

                            echo $card;
                        }

                    ?>
                </section>
            </div>  
           
            <?php include $_SERVER['DOCUMENT_ROOT'].'/app/snippets/footer.php'; ?>
        </main>
    </body>
</html>