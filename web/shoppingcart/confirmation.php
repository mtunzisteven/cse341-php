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
        
        <div class="form" >
            <h3 class="checkout-form-title">Thank you for Placing Your Order</h3>
            <div class="order-summary">

                <div class="address">
                <?php 
                    
                ?>
                </div>

                <div class="products">
                <?php 
                    
                ?>
                </div>

            </div>

        </div>
        
        <?php require "snippets/footer.php"; ?>
        
    </body>

</html>
