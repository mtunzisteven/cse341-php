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

            <div class="profile sections">  
                <section class="left-section">
                    <img class="dev-img" alt="Profile Image" src="" />
                    <hr/>
                    <?php  
                        include "/app/main-model.php";
                    
                    ?>
                </section>   
                <section class="right-section"></section>
            </div>
           
            <?php include 'snippets/footer.php'; ?>
        </main>
    </body>
</html>