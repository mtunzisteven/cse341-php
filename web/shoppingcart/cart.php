<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Browse</title>
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

            if(isset($_POST["watchdata"]) && isset($_POST["watchsrc"])){

                $_SESSION["watchdata"] = $_POST["watchdata"];
                $_SESSION["watchsrc"] = $_POST["watchsrc"];

                echo '<div class="cart-item"><img class="cart-thumnails" alt="salts" src='.$_SESSION["watchsrc"].' /><p class="cart-item-title">'.$_SESSION["watchdata"].'</p><input class="buttons" type="button" id="removewatch" name="removewatch" value="Delete item" /></div>';
            }

            if(isset($_POST["saltsdata"]) && isset($_POST["saltssrc"])){

                $_SESSION["saltsdata"] = $_POST["saltsdata"];
                $_SESSION["saltssrc"] = $_POST["saltssrc"];

                echo '<div class="cart-item"><img class="cart-thumnails" alt="salts" src='.$_SESSION["saltssrc"].' /><p class="cart-item-title">'.$_SESSION["saltsdata"].'</p><input class="buttons" type="button" id="removesalts" name="removesalts" value="Delete item" /></div>';
            }

            if(isset($_POST["oilsdata"]) && isset($_POST["oilssrc"])){    //Since form is submitted to this page, we capture the information here

                $_SESSION["oilsdata"] = $_POST["oilsdata"];
                $_SESSION["oilssrc"] = $_POST["oilssrc"];

                echo '<div class="cart-item"><img class="cart-thumnails" alt="salts" src='.$_SESSION["oilssrc"].' /><p class="cart-item-title">'.$_SESSION["oilsdata"].'</p><input class="buttons" type="button" id="removeoils" name="removeoils" value="Delete item" /></div>';
            }

            if(isset($_POST["maskdata"]) && isset($_POST["masksrc"])){    //Since form is submitted to this page, we capture the information here

                $_SESSION["maskdata"] = $_POST["maskdata"];
                $_SESSION["masksrc"] = $_POST["masksrc"];

                echo '<div class="cart-item"><img class="cart-thumnails" alt="salts" src='.$_SESSION["masksrc"].' /><p class="cart-item-title">'.$_SESSION["maskdata"].'</p><input class="buttons" type="button" id="removemask" name="removemask" value="Delete item" /></div>';
            }

            if(isset($_POST["sandalsdata"]) && isset($_POST["sandalssrc"])){    //Since form is submitted to this page, we capture the information here

                $_SESSION["sandalsdata"] = $_POST["sandalsdata"];
                $_SESSION["oilssrc"] = $_POST["oilssrc"];

                echo '<div class="cart-item"><img class="cart-thumnails" alt="salts" src='.$_SESSION["sandalssrc"].' /><p class="cart-item-title">'.$_SESSION["sandalsdata"].'</p><input class="buttons" type="button" id="removesamdals" name="removesamdals" value="Delete item" /></div>';
            }

            if(isset($_POST["chaneldata"]) && isset($_POST["chanelsrc"])){    //Since form is submitted to this page, we capture the information here

                $_SESSION["chaneldata"] = $_POST["chaneldata"];
                $_SESSION["chanelsrc"] = $_POST["chanelsrc"];

                echo '<div class="cart-item"><img class="cart-thumnails" alt="salts" src='.$_SESSION["chanelsrc"].' /><p class="cart-item-title">'.$_SESSION["chaneldata"].'</p><input class="buttons" type="button" id="removechanel" name="removechanel" value="Delete item" /></div>';
            }

            if(isset($_POST["loaferdata"]) && isset($_POST["loafersrc"])){    //Since form is submitted to this page, we capture the information here

                $_SESSION["loaferdata"] = $_POST["loaferdata"];
                $_SESSION["loafersrc"] = $_POST["loafersrc"];

                echo '<div class="cart-item"><img class="cart-thumnails" alt="salts" src='.$_SESSION["loafersrc"].' /><p class="cart-item-title">'.$_SESSION["loaferdata"].'</p><input class="buttons" type="button" id="removeloafer" name="removeloafer" value="Delete item" /></div>';
            }           

            if(isset($_POST["trainerdata"]) && isset($_POST["trainersrc"]) && isset($_POST["trainerqty"])){    //Since form is submitted to this page, we capture the information here

                $_SESSION["trainerdata"] = $_POST["trainerdata"];
                $_SESSION["trainersrc"] = $_POST["trainersrc"];
                $_SESSION["trainerqty"] = $_POST["trainerqty"];
                
                echo '<div class="cart-item"><img class="cart-thumnails" alt="salts" src='.$_SESSION["trainersrc"].' /><p class="cart-item-title">'.$_SESSION["trainerdata"].'</p><p class="cart-item-quantity">'.$_SESSION["trainerqty"].'</p><input class="buttons" type="button" id="removetrainer" name="removetrainer" value="Delete item" /></div>';
            }
            

            ?>
        </form>
        
        <?php require "snippets/footer.php"; ?>
        
    </body>
</html>
