<?php session_start();  ?>
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
        
        <?php require "snippets/header.php";   ?>
    
        <div class="form">
            <form id="form" method="post" action="cart.php" class="product-container form1">
                <label id="watch-label">
                    <img class="products" alt="watch" src="images/watch.jpg" />
                    Fossil Watch<br/>$150
                    
                </label>
                <input class="invisibles proname" type="text" id="watchdata" name="watchdata" value="Fossil Watch" /> 
                <input class="invisibles qty" type="text" id="qty" name="watchqty" value="<?php if($_SESSION["watchqty"]<1){echo 0 ;} else{echo $_SESSION["watchqty"];} ?>" />
                <input class="invisibles src" type="text" id="src" name="watchsrc" value="images/watch.jpg" />
                <input class="buttons" id="watch" type="submit" name="watch" value="Add to Cart" />
            </form>

            <form id="form" method="post" action="cart.php" class="product-container form2">
                <label  id="salts-label">
                    <img class="products" alt="salts" src="images/salts.jpg" />
                    Bath Salts<br/>$15
                </label>
                <input class="invisibles proname" type="text" id="saltsdata" name="saltsdata" value="Bath Salts" />
                <input class="invisibles qty" type="text" id="qty" name="saltsqty" value="<?php if($_SESSION["saltsqty"]<1){echo 0 ;} else{echo $_SESSION["saltsqty"];} ?>" />
                <input class="invisibles src" type="text" id="src" name="saltssrc" value="images/salts.jpg" /> 
                <input class="buttons" id="salts" type="submit" name="salts" value="Add to Cart" />
            </form>

            <form method="post" action="cart.php" class="product-container form3">
                <label>
                    <img class="products" alt="watch" src="images/sandals.jpg" />
                    Brikestock Sandals<br/>$50    
                </label>
                <input class="invisibles proname" type="text" id="sandalsdata" name="sandalsdata" value="Brikestock Sandals" />
                <input class="invisibles qty" type="text" id="qty" name="sandalsqty" value="<?php if($_SESSION["watchqty"]<1){echo 0 ;} else{echo $_SESSION["watchqty"];} ?>" />
                <input class="invisibles src" type="text" id="src" name="sandalssrc" value="images/sandals.jpg" />  
                <input class="buttons" type="button" id="submit" name="sandals" value="Add to Cart" />
            </form>

            <form method="post" action="cart.php" class="product-container form4">
                <label class="products-label">
                    <img class="products" alt="watch" src="images/oil.jpg" />
                    Coconut Oil<br/>$10
                </label>
                <input class="invisibles proname" type="text" id="oilsdata" name="oilsdata" value="Coconut Oil" /> 
                <input class="invisibles qty" type="text" id="qty" name="oilsqty" value="<?php if($_SESSION["oilsqty"]<1){echo 0 ;} else{echo $_SESSION["oilsqty"];} ?>" />
                <input class="invisibles src" type="text" id="src" name="oilssrc" value="images/oil.jpg" /> 
                <input class="buttons" type="submit" id="oil" name="oil" value="Add to Cart" />
            </form>

            <form method="post" action="cart.php" class="product-container form5">
                <label>
                    <img class="products" alt="watch" src="images/mask.jpg" />
                    Face Mask<br/>$50
                </label>
                <input class="invisibles proname" type="text" id="maskdata" name="maskdata" value="Face Mask" /> 
                <input class="invisibles qty" type="text" id="qty" name="maskqty" value="<?php if($_SESSION["maskqty"]<1){echo 0 ;} else{echo $_SESSION["maskqty"];} ?>" />
                <input class="invisibles src" type="text" id="src" name="masksrc" value="images/mask.jpg" /> 
                <input class="buttons" type="submit" id="mask" name="mask" value="Add to Cart" />
            </form>

            <form method="post" action="cart.php" class="product-container form6">
                <label>
                    <img class="products" alt="watch" src="images/chanel.jpg" />
                    Gabriel Chanel<br/>$150
                </label>
                <input class="invisibles proname" type="text" id="chaneldata" name="chaneldata" value="Gabriel Chanel" />
                <input class="invisibles qty" type="text" id="qty" name="chanelqty" value="<?php if($_SESSION["chanelqty"]<1){echo 0 ;} else{echo $_SESSION["chanelqty"];} ?>" />
                <input class="invisibles src" type="text" id="src" name="chanelsrc" value="images/chanel.jpg" />
                <input class="buttons" type="submit" id="gabriel" name="gabriel" value="Add to Cart" />
            </form>

            <form method="post" action="cart.php" class="product-container form7">
                <label>
                    <img class="products" alt="watch" src="images/loafer.jpg" />
                    Green Loafer<br/>$100
                </label>
                <input class="invisibles proname" type="text" id="loaferdata" name="loaferdata" value="Green Loafer" />
                <input class="invisibles qty" type="text" id="qty" name="loaferqty" value="<?php if($_SESSION["loaferqty"]<1){echo 0 ;} else{echo $_SESSION["loaferqty"];} ?>" />
                <input class="invisibles src" type="text" id="src" name="loafersrc" value="images/loafer.jpg" />
                <input class="buttons" type="submit" id="loafer" name="loafer" value="Add to Cart" />
            </form>

            <form method="post" action="cart.php" class="product-container form8">
                <label>
                    <img class="products" alt="watch" src="images/trainer.jpg" />
                    Nike Trainer<br/>$190
                </label>
                <input class="invisibles proname" type="text" id="trainerdata" name="trainerdata" value="Nike Trainer" />
                <input class="invisibles qty" type="text" id="qty" name="trainerqty" value="<?php if($_SESSION["trainerqty"]<1){echo 0 ;} else{echo $_SESSION["trainerqty"];} ?>" />
                <input class="invisibles src" type="text" id="src" name="trainersrc" value="images/trainer.jpg" />
                <input class="buttons" type="submit" id="trainer" name="trainer" value="Add to Cart" />
            </form>
        </div>    
        <?php require "snippets/footer.php"; ?>
        
    </body>
</html>