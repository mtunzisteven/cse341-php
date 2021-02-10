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
                <h1 id="title">Welcome!</h1>
            </div>
            <form class="reg-form" method="post" action="/app/accounts/index.php">
                <h3>Registration</h3>
                <label class="reg-label">First Name</label>
                <input class="reg-inputs" type="text" name="firstname" />

                <label class="reg-label">Last Name</label>
                <input class="reg-inputs" type="text" name="lastname" />
                
                <label class="reg-label">Email Address</label>
                <input class="reg-inputs" type="email" name="email" />

                <label class="reg-label">Phone</label>
                <input class="reg-inputs" type="phone" name="phone" />

                <label class="reg-label">Username</label>
                <input class="reg-inputs" type="text" name="username" />
                
                <label class="reg-label">Password</label>
                <input class="reg-inputs" type="text" name="passwrd" />
                
                
                <input class="reg-inputs reg-button" type="submit" name="submit" id="regbtn" value="register" />
                <input type="hidden" name="action" value="register">
                

            </form>

           
            <?php include '../snippets/footer.php'; ?>
        </main>
    </body>
</html>



            