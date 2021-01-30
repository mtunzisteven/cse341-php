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
        
        <form class="cart-form" method="post" action="checkout.php" >
            
            
        </form>

        <div class="checkout-buttons-container">
            <a class="checkout-link" href="cart.php" ><button class="buttons checkout-button"> Return to Cart</button></a>
            <a class="checkout-link" href="confirmation.php" ><button class="buttons checkout-button"> Complete Purchase<button></a>
        </div>
        
        <?php require "snippets/footer.php"; ?>
        
    </body>

</html>
