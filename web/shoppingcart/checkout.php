<?php session_start(); 

?>

<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Checkout</title>
        <meta charset="utf-8">
        <meta content="author" name="Mtunzi Mavuma" >
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        
        <?php require "snippets/header.php"; ?>
        
        <form class="cart-form checkout-form" method="post" action="confirmation.php" >
            <h3 class="checkout-form-title">Please enter your addess</h3>
            <label class="checkout-label">Address Line 1
                <input class="checkout-input" type="text" name="addressl1" value=<?php if(isset($_SESSION["addressl1"])){echo $_SESSION["addressl1"];}else{echo "";} ?> />
            </label>
            <label class="checkout-label">Street  Line 2
                <input class="checkout-input" type="text" name="addressl2" value=<?php if(isset($_SESSION["addressl2"])){echo $_SESSION["addressl2"];}else{echo "";} ?> />
            </label>
            <label class="checkout-label">Town
                <input class="checkout-input" type="text" name="town" value=<?php if(isset($_SESSION["town"])){echo $_SESSION["town"];}else{echo "";} ?> />
            </label>
            <label class="checkout-label">Zip Code
                <input class="checkout-input" type="text" name="code" value=<?php if(isset($_SESSION["code"])){echo $_SESSION["code"];}else{echo "";} ?> />
            </label>

            <input type="submit" class="buttons checkout-button complete" value="Complete Purchase" />
            
        </form>

        <div class="checkout-buttons-container">
            <a class="checkout-link" href="cart.php" ><button class="buttons checkout-button"> Return to Cart</button></a>
        </div>
        
        <?php require "snippets/footer.php"; ?>
        
    </body>

</html>
