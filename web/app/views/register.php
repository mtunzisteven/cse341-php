<!doctype html>
<html lang="en-us">
    <head>
        <title>Registration</title>
        <meta charset="utf-8">
        <meta content="width=device-width,initial-scale=1,shrink-to-fit=no" name="viewport">
        <link href="/app/css/style.css" media="screen" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        <main class="content">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/app/snippets/header.php'; ?>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/app/snippets/navigation.php'; ?>

            <div class="hero">     
                <h1 id="title">Welcome!</h1>
            </div>
            <div class="registration-buttons">
                <button class="customer-button on">Customer</button>
                <button class="developer-button ">Developer</button>
            </div>
            <form class="customer-form reg-form" method="post" action="/app/accounts/index.php">
                <h3>Customer Registration</h3>
                <label class="reg-label">First Name</label>
                <input class="reg-inputs" type="text" name="firstname" />

                <label class="reg-label">Last Name</label>
                <input class="reg-inputs" type="text" name="lastname" />
                
                <label class="reg-label">Email Address</label>
                <input class="reg-inputs" type="email" name="email" />

                <label class="reg-label">Phone</label>
                <input class="reg-inputs" type="phone" name="phone" />
                
                <label class="reg-label">Password</label>
                <input class="reg-inputs" type="password" name="passwrd" pattern="/[\da-zA-Z]{8,}/" required />
                <input type="hidden" name="profileimage" value="no-image.png" />
                
                <input class="reg-inputs reg-button" type="submit" name="submit" value="register" />
                <input type="hidden" name="action" value="register-customer">
                
            </form>
            <form class="hide developer-form reg-form" method="post" action="/app/accounts/index.php">
                <h3>Developer Registration</h3>
                <label class="reg-label">First Name</label>
                <input class="reg-inputs" type="text" name="firstname" />

                <label class="reg-label">Last Name</label>
                <input class="reg-inputs" type="text" name="lastname" />
                
                <label class="reg-label">Email Address</label>
                <input class="reg-inputs" type="email" name="email" />

                <label class="reg-label">Phone</label>
                <input class="reg-inputs" type="phone" name="phone" />

                <label class="reg-label">Country</label>
                <input class="reg-inputs" type="text" name="country" />

                <label class="reg-label">City</label>
                <input class="reg-inputs" type="text" name="city" />

                <label class="reg-label">Username</label>
                <input class="reg-inputs" type="text" name="username" />
                
                <label class="reg-label">Password</label>
                <input class="reg-inputs" type="password" name="passwrd" pattern="/[\da-zA-Z]{8,}/" required />
                <input type="hidden" name="profileimage" value="no-image.png" />
                
                <input class="reg-inputs reg-button" type="submit" name="submit" value="register" />
                <input type="hidden" name="action" value="register-developer">
                
            </form>

           
            <?php include $_SERVER['DOCUMENT_ROOT'].'/app/snippets/footer.php'; ?>
        </main>
        <script src="/app/library/functions.js"></script>
    </body>
</html>



            