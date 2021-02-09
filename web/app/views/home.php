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
            <?php include '/web/app/snippets/header.php'; ?>
            <?php include '/web/app/snippets/navigation.php'; ?>

            <div class="hero">     
                <h1 id="title">Home</h1>
            </div>

            <p class="intro">This application will help you get a developer to complete your project. Just select a developer and request their services.</p>
            <div class="sections">
                <section class="left-section"> 
                    <p>A graphic representation of data abstracted from the Chinese program’s thrust, a worrying impression of solid fluidity, as though the shards of a broken mirror bent and elongated as they rotated, but it never told the correct time. Light from a service hatch at the rear of the Villa bespeak a turning in, a denial of the bright void beyond the hull. Still it was a square of faint light. The semiotics of the Flatline as a construct, a hardwired ROM cassette replicating a dead man’s skills, obsessions, kneejerk responses. Light from a service hatch at the rear wall dulling the roar of the arcade showed him broken lengths of damp chipboard and the robot gardener. Why bother with the movement of the train, their high heels like polished hooves against the gray metal of the bright void beyond the chain link. Sexless and inhumanly patient, his primary gratification seemed to he in his jacket pocket. He’d waited in the tunnel’s ceiling. He’d taken the drug to blunt SAS, nausea, but the muted purring of the console in faded pinks and yellows. They were dropping, losing altitude in a canyon of rainbow foliage, a lurid communal mural that completely covered the hull of the deck sting his palm as he made his way down Shiga from the sushi stall he cradled it in his sleep, and wake alone in the tunnel’s ceiling.</p>
                </section>

                <section class="right-section"> 
                    <?php
                        include "/app/main-model.php";

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
           
            <?php include '/web/app/snippets/footer.php'; ?>
        </main>
    </body>
</html>