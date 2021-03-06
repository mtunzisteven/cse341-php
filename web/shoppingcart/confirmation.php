<?php session_start(); 

      
if(isset($_POST["addressl1"])){   

    $_SESSION["addressl1"] = $_POST["addressl1"];

}

if(isset($_POST["addressl2"])){   

    $_SESSION["addressl2"] = $_POST["addressl2"];

}

if(isset($_POST["town"])){   

    $_SESSION["town"] = $_POST["town"];

}

if(isset($_POST["code"])){   

    $_SESSION["code"] = $_POST["code"];

}

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
        
        <h3 class="confirm-form-title">Thank you for Placing Your Order</h3>
        <div class="confirmation-container" >
            
            <div class="order-summary">

                <div class="address">
                    <h4 class="confirmation-column-title">Items Purchased</h4>
                    <?php 
                        if(isset($_SESSION["addressl1"])){
                            echo '<p class="address-summary">'.$_SESSION["addressl1"].'</p>';
                        }

                        if(isset($_SESSION["addressl2"])){
                            echo '<p class="address-summary">'.$_SESSION["addressl2"].'</p>';
                        }

                        if(isset($_SESSION["town"])){
                            echo '<p class="address-summary">'.$_SESSION["town"].'</p>';
                        }

                        if(isset($_SESSION["code"])){
                            echo '<p class="address-summary">'.$_SESSION["code"].'</p>';
                        }
                    ?>
                </div>

                <div class="products">
                    <h4 class="confirmation-column-title">Items Purchased</h4>
                    <?php 

                        if(isset($_SESSION["watchdata"]) && isset($_SESSION["watchsrc"]) && isset($_SESSION["watchqty"])){
                            echo '<div class="cart-item summary-item"><img class="cart-thumnails removewatch" alt="watch" src='.$_SESSION["watchsrc"].' /><p class="cart-item-title removesalts">'.$_SESSION["watchdata"].'</p></div>';
                        }
                        if(isset($_SESSION["saltsdata"]) && isset($_SESSION["saltssrc"]) && isset($_SESSION["saltsqty"])){
                            echo '<div class="cart-item summary-item"><img class="cart-thumnails removesalts" alt="salts" src='.$_SESSION["saltssrc"].' /><p class="cart-item-title removesalts">'.$_SESSION["saltsdata"].'</p></div>';
                        }

                        if(isset($_SESSION["oilsdata"]) && isset($_SESSION["oilssrc"]) && isset($_SESSION["oilsqty"])){
                            echo '<div class="cart-item summary-item"><img class="cart-thumnails removeoils" alt="oils" src='.$_SESSION["oilssrc"].' /><p class="cart-item-title removeoils">'.$_SESSION["oilsdata"].'</p></div>';
                        }

                        if(isset($_SESSION["maskdata"]) && isset($_SESSION["masksrc"]) && isset($_SESSION["maskqty"])){
                            echo '<div class="cart-item summary-item"><img class="cart-thumnails removemask" alt="mask" src='.$_SESSION["masksrc"].' /><p class="cart-item-title removemask">'.$_SESSION["maskdata"].'</p></div>';
                        }

                        if(isset($_SESSION["sandalsdata"]) && isset($_SESSION["sandalssrc"]) && isset($_SESSION["sandalsqty"])){
                            echo '<div class="cart-item summary-item"><img class="cart-thumnails removesamdals" alt="sandals" src='.$_SESSION["sandalssrc"].' /><p class="cart-item-title removesamdals">'.$_SESSION["sandalsdata"].'</p></div>';
                        }

                        if(isset($_SESSION["chaneldata"]) && isset($_SESSION["chanelsrc"]) && isset($_SESSION["chanelqty"])){
                            echo '<div class="cart-item summary-item"><img class="cart-thumnails removechanel" alt="chanel" src='.$_SESSION["chanelsrc"].' /><p class="cart-item-title removechanel">'.$_SESSION["chaneldata"].'</p></div>';
                        }

                        if(isset($_SESSION["loaferdata"]) && isset($_SESSION["loafersrc"]) && isset($_SESSION["loaferqty"])){
                            echo '<div class="cart-item summary-item"><img class="cart-thumnails removeloafer" alt="loafer" src='.$_SESSION["loafersrc"].' /><p class="cart-item-title removeloafer">'.$_SESSION["loaferdata"].'</p></div>';
                        }  

                        if(isset($_SESSION["trainerdata"]) && isset($_SESSION["trainersrc"]) && isset($_SESSION["trainerqty"])){
                            echo '<div class="cart-item summary-item"><img class="cart-thumnails removetrainer" alt="trainer" src='.$_SESSION["trainersrc"].' /><p class="cart-item-title removetrainer">'.$_SESSION["trainerdata"].'</p></div>';
                        }
                        
                    ?>
                </div>

            </div>

        </div>
        
        <?php require "snippets/footer.php"; ?>
        
    </body>

</html>
