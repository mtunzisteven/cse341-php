<?php session_start(); 

            
if(isset($_POST["watchdata"]) && isset($_POST["watchsrc"])){    //Since form is submitted to this page, we capture the information here

    $_SESSION["watchdata"] = $_POST["watchdata"];
    $_SESSION["watchsrc"] = $_POST["watchsrc"];
    $_SESSION["watchqty"] = $_POST["watchqty"];
}

if(isset($_POST["saltsdata"]) && isset($_POST["saltssrc"])){    //Since form is submitted to this page, we capture the information here

    $_SESSION["saltsdata"] = $_POST["saltsdata"];
    $_SESSION["saltssrc"] = $_POST["saltssrc"];
    $_SESSION["saltsqty"] = $_POST["saltsqty"];

}

if(isset($_POST["oilsdata"]) && isset($_POST["oilssrc"])){    //Since form is submitted to this page, we capture the information here

    $_SESSION["oilsdata"] = $_POST["oilsdata"];
    $_SESSION["oilssrc"] = $_POST["oilssrc"];
    $_SESSION["oilsqty"] = $_POST["oilsqty"];

}

if(isset($_POST["maskdata"]) && isset($_POST["masksrc"])){    //Since form is submitted to this page, we capture the information here

    $_SESSION["maskdata"] = $_POST["maskdata"];
    $_SESSION["masksrc"] = $_POST["masksrc"];
    $_SESSION["maskqty"] = $_POST["maskqty"];


}

if(isset($_POST["sandalsdata"]) && isset($_POST["sandalssrc"])){    //Since form is submitted to this page, we capture the information here

    $_SESSION["sandalsdata"] = $_POST["sandalsdata"];
    $_SESSION["sandalssrc"] = $_POST["sandalssrc"];
    $_SESSION["sandalsqty"] = $_POST["sandalsqty"];


}

if(isset($_POST["chaneldata"]) && isset($_POST["chanelsrc"])){    //Since form is submitted to this page, we capture the information here

    $_SESSION["chaneldata"] = $_POST["chaneldata"];
    $_SESSION["chanelsrc"] = $_POST["chanelsrc"];
    $_SESSION["chanelqty"] = $_POST["chanelqty"];


}

if(isset($_POST["loaferdata"]) && isset($_POST["loafersrc"])){    //Since form is submitted to this page, we capture the information here

    $_SESSION["loaferdata"] = $_POST["loaferdata"];
    $_SESSION["loafersrc"] = $_POST["loafersrc"];
    $_SESSION["loaferqty"] = $_POST["loaferqty"];


}

if(isset($_POST["trainerdata"]) && isset($_POST["trainersrc"])){    //Since form is submitted to this page, we capture the information here

    $_SESSION["trainerdata"] = $_POST["trainerdata"];
    $_SESSION["trainersrc"] = $_POST["trainersrc"];
    $_SESSION["trainerqty"] = $_POST["trainerqty"];


}
?>

<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Cart</title>
        <meta charset="utf-8">
        <meta content="author" name="Mtunzi Mavuma" >
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
        
        <?php require "snippets/header.php"; ?>
        
        <form class="cart-form" method="post" action="checkout.php" >
            <?php

            //Watch input and associated elements
            if(isset($_SESSION["watchdata"]) && isset($_SESSION["watchsrc"]) && isset($_SESSION["watchqty"])){
                if(!isset($_POST['removewatch'])){ //Make sure the item is not being removed by button below.
                    echo '<div class="cart-item removewatch"><img class="cart-thumnails removewatch" alt="salts" src='.$_SESSION["watchsrc"]."  ".$_SESSION["watchqty"].' /><p class="cart-item-title removewatch">'.$_SESSION["watchdata"].'</p><input class="buttons removers removewatch" type="button" id="removewatch" name="removewatch" value="Delete item" /></div>';
                }
                else{
                    unset($_POST["watchdata"]); unset($_POST["watchdsrc"]); unset($_POST["watchqty"]);
                    unset($_SESSION["watchdata"]); unset($_SESSION["watchdsrc"]); unset($_SESSION["watchqty"]);
                }
            }
            if(isset($_SESSION["saltsdata"]) && isset($_SESSION["saltssrc"]) && isset($_SESSION["saltsqty"])){
                if(!isset($_POST['removesalts'])){
                    echo '<div class="cart-item removesalts"><img class="cart-thumnails removesalts" alt="salts" src='.$_SESSION["saltssrc"].' /><p class="cart-item-title removesalts">'.$_SESSION["saltsdata"].'</p><input class="buttons removers removesalts" type="button" id="removesalts" name="removesalts" value="Delete item" /></div>';
                }
                else{
                    unset($_POST["saltsdata"]); unset($_POST["saltssrc"]); unset($_POST["saltsqty"]);
                    unset($_SESSION["saltsdata"]); unset($_SESSION["saltssrc"]); unset($_SESSION["saltsqty"]);
                }
            }

            if(isset($_SESSION["oilsdata"]) && isset($_SESSION["oilssrc"]) && isset($_SESSION["oilsqty"])){
                if(!isset($_POST['removeoils'])){
                    echo '<div class="cart-item removeoils"><img class="cart-thumnails removeoils" alt="salts" src='.$_SESSION["oilssrc"].' /><p class="cart-item-title removeoils">'.$_SESSION["oilsdata"].'</p><input class="buttons removers removeoils" type="button" id="removeoils" name="removeoils" value="Delete item" /></div>';
                }
                else{
                    unset($_POST["oilsdata"]); unset($_POST["oilssrc"]); unset($_POST["oilsqty"]);
                    unset($_SESSION["oilsdata"]); unset($_SESSION["oilssrc"]); unset($_SESSION["oilsqty"]);
                }
            }

            if(isset($_SESSION["maskdata"]) && isset($_SESSION["masksrc"]) && isset($_SESSION["maskqty"])){
                if(!isset($_POST['removemask'])){
                    echo '<div class="cart-item removemask"><img class="cart-thumnails removemask" alt="salts" src='.$_SESSION["masksrc"].' /><p class="cart-item-title removemask">'.$_SESSION["maskdata"].'</p><input class="buttons removers removemask" type="button" id="removemask" name="removemask" value="Delete item" /></div>';
                }
                else{
                    unset($_POST["maskdata"]); unset($_POST["masksrc"]); unset($_POST["maskqty"]);
                    unset($_SESSION["maskdata"]); unset($_SESSION["masksrc"]); unset($_SESSION["maskqty"]);
                }
            }

            if(isset($_SESSION["sandalsdata"]) && isset($_SESSION["sandalssrc"]) && isset($_SESSION["sandalsqty"])){
                if(!isset($_POST['removesamdals'])){
                    echo '<div class="cart-item removesamdals"><img class="cart-thumnails removesamdals" alt="salts" src='.$_SESSION["sandalssrc"].' /><p class="cart-item-title removesamdals">'.$_SESSION["sandalsdata"].'</p><input class="buttons removers removesamdals" type="button" id="removesamdals" name="removesamdals" value="Delete item" /></div>';
                }
                else{
                    unset($_POST["sandalsdata"]); unset($_POST["sandalssrc"]); unset($_POST["sandalsqty"]);
                    unset($_SESSION["sandalsdata"]); unset($_SESSION["sandalssrc"]); unset($_SESSION["sandalsqty"]);
                }
            }

            if(isset($_SESSION["chaneldata"]) && isset($_SESSION["chanelsrc"]) && isset($_SESSION["chanelqty"])){
                if(!isset($_POST['removechanel'])){
                    echo '<div class="cart-item removechanel"><img class="cart-thumnails removechanel" alt="salts" src='.$_SESSION["chanelsrc"].' /><p class="cart-item-title removechanel">'.$_SESSION["chaneldata"].'</p><input class="buttons removers removechanel" type="button" id="removechanel" name="removechanel" value="Delete item" /></div>';
                }
                else{
                    unset($_POST["chaneldata"]); unset($_POST["chanelsrc"]); unset($_POST["chanelqty"]);
                    unset($_SESSION["chaneldata"]); unset($_SESSION["chanelsrc"]); unset($_SESSION["chanelqty"]);
                }
            }

            if(isset($_SESSION["loaferdata"]) && isset($_SESSION["loafersrc"]) && isset($_SESSION["loaferqty"])){
                if(!isset($_POST['removeloafer'])){
                    echo '<div class="cart-item removeloafer"><img class="cart-thumnails removeloafer" alt="salts" src='.$_SESSION["loafersrc"].' /><p class="cart-item-title removeloafer">'.$_SESSION["loaferdata"].'</p><input class="buttons removers removeloafer" type="button" id="removeloafer" name="removeloafer" value="Delete item" /></div>';
                }     
                else{
                    unset($_POST["loaferdata"]); unset($_POST["loafersrc"]); unset($_POST["loaferqty"]);
                    unset($_SESSION["loaferdata"]); unset($_SESSION["loafersrc"]); unset($_SESSION["loaferqty"]);
                }
            }  

            if(isset($_SESSION["trainerdata"]) && isset($_SESSION["trainersrc"]) && isset($_SESSION["trainerqty"])){
                if(!isset($_POST['removeloafer'])){
                    echo '<div class="cart-item removetrainer"><img class="cart-thumnails removetrainer" alt="salts" src='.$_SESSION["trainersrc"].' /><p class="cart-item-title removetrainer">'.$_SESSION["trainerdata"].'</p><input class="buttons removers removetrainer" type="button" id="removetrainer" name="removetrainer" value="Delete item" /></div>';
                }
                else{
                    unset($_POST["trainerdata"]); unset($_POST["trainersrc"]); unset($_POST["trainerqty"]);
                    unset($_SESSION["trainerdata"]); unset($_SESSION["trainersrc"]); unset($_SESSION["trainerqty"]);
                }
            }
            
            if(!isset($_SESSION["watchdata"]) && !isset($_SESSION["saltsdata"]) && !isset($_SESSION["oilsdata"]) && !isset($_SESSION["maskdata"]) && !isset($_SESSION["sandalsdata"]) && !isset($_SESSION["chaneldata"]) && !isset($_SESSION["loaferdata"]) && !isset($_SESSION["trainerdata"])){
                echo '<p class="cart-item-title2">Your Cart is empty</p>';
                }

            else{
                echo '<input class="buttons cart-checkout-button" type="submit" value="Go to Checkout" />';
            }
                
            ?>

            
        </form>
        
        <?php require "snippets/footer.php"; ?>
        
    </body>
</html>
