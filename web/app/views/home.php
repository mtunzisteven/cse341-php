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
            <?php include '../snippets/header.php'; ?>
            <?php include '../snippets/navigation.php'; ?>

            <div class="hero">     
                <h1 id="title">Home</h1>
            </div>

            <div class="sections">
                <section class="left-section"> 
                    <h4>Posted Projects</h4>
                    <?php
                        echo $projectList;
                    ?>
                </section>

                <section class="right-section"> 
                    <?php
                        echo $dev;
                    ?>
                </section>
            </div>  
           
            <?php include '../snippets/footer.php'; ?>
        </main>
    </body>
</html>