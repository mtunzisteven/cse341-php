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
                <h1 id="title">Welcome!</h1>
            </div>
            <p class="form-message">

                <?php 
                    if(!empty($message)){
                        echo $message;
                    }
                ?>

            </p>
            <form class="login-form" method="post" action="/app/accounts/index.php">

                <h3>Login</h3>
                <label class="login-label">Username</label>
                <input class="login-inputs" type="text" name="username"  />
                
                <label class="login-label">Password</label>
                <input class="login-inputs" type="text" name="passwrd" />
                
                <input class="login-inputs login-button" type="submit" name="login" value="login" />
                <input type="hidden" name="action" value="developer-login" />
                <a  class="login-inputs login-reg-button connection" href="../accounts/index.php?action=regform" title="registration form">register</a>
            </form>
            
            <?php include $_SERVER['DOCUMENT_ROOT'].'/app/snippets/footer.php'; ?>
        </main>
    </body>
</html>
