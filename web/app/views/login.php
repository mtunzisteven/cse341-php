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
            <?php include '/app/snippets/header.php'; ?>
            <?php include '/app/snippets/navigation.php'; ?>

            <div class="hero">     
                <h1 id="title">Welcome!</h1>
            </div>
            <form class="login-form" method="post" action="/">
                <h3>Login</h3>
                <label class="login-label">Email Address</label>
                <input class="login-inputs" type="email" name="email"  />
                
                <label class="login-label">Password</label>
                <input class="login-inputs" type="text" name="password" />
                
                
                <input class="login-inputs login-button" type="submit" name="login" value="login" />
                <a  class="login-inputs login-reg-button connection" href="../index.php?action=reg" title="registration form">register</a>
            </form>
            
            <?php include '/app/snippets/footer.php'; ?>
        </main>
    </body>
</html>
