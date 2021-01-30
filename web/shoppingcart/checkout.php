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

        <a href="cart.php" lass="buttons cart-checkout-button"> Return to Cart</a>
        <a href="cart.php" lass="buttons cart-checkout-button"> Complete Purchase</a>
        
        <?php require "snippets/footer.php"; ?>
        
    </body>
</html>
