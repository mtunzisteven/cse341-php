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
            <?php include '/cs313-php/app/snippets/header.php'; ?>
            <?php include '/app/snippets/navigation.php'; ?>

            <div class="hero">     
                <h1 id="title">Home</h1>
            </div>

            <div class="sections">
                <section class="left-section"> 
                    <h4>Posted Projects</h4>
                    <?php
                        foreach($projectList as $project){
                            echo $project;
                        }
                    ?>
                </section>

                <section class="right-section"> 
                    <?php
                        foreach($dev as $inforcard){
                            echo $inforcard;
                        }
                    ?>
                </section>
            </div>  
           
            <?php include '/app/snippets/footer.php'; ?>
        </main>
    </body>
</html>