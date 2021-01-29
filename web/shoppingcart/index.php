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
            <form id="form" method="post" action="cart.php" class="product-container">
                <label id="watch-label">
                    <img class="products" alt="watch" src="images/fossil watch.jpg" />
                    Fossil Watch<br/>$150
                    
                </label>
                <input class="invisibles proname" type="text" id="watchdata" name="watchdata" value="Fossil Watch" /> 
                <input class="invisibles qty" type="text" id="qty" name="watchqty" value="<?php if($_SESSION["watchqty"]<1){echo 0 ;} else{echo $_SESSION["watchqty"];} ?>" />
                <input class="invisibles src" type="text" id="src" name="watchsrc" value="images/logo.png" />
                <input class="buttons" id="watch" type="submit" name="watch" value="Add to Cart" />
            </form>

            <form id="form" method="post" action="" class="product-container">
                <label  id="salts-label">
                    <img class="products" alt="salts" src="images/bath salts.jpg" />
                    Bath Salts<br/>$15
                </label>
                <input class="invisibles proname" type="text" id="saltsdata" name="saltsdata" value="Bath Salts" />
                <input class="invisibles qty" type="text" id="qty" name="saltsqty" value="<?php if($_SESSION["saltsqty"]<1){echo 0 ;} else{echo $_SESSION["saltsqty"];} ?>" />
                <input class="invisibles src" type="text" id="src" name="saltssrc" value="images/bath salts.jpg" /> 
                <input class="buttons" id="salts" type="button" name="salts" value="Add to Cart" />
            </form>

            <form method="post" action="" class="product-container">
                <label>
                    <img class="products" alt="watch" src="images/brikestock sandals.jpg" />
                    Brikestock Sandals<br/>$50    
                </label>
                <input class="invisibles proname" type="text" id="sandalsdata" name="sandalsdata" value="Brikestock Sandals" />
                <input class="invisibles qty" type="text" id="qty" name="sandalsqty" value="<?php if($_SESSION["watchqty"]<1){echo 0 ;} else{echo $_SESSION["watchqty"];} ?>" />
                <input class="invisibles src" type="text" id="src" name="sandalssrc" value="images/brikestock sandals.jpg" />  
                <input class="buttons" type="button" id="sandals" name="sandals" value="Add to Cart" />
            </form>

            <form method="post" action="" class="product-container">
                <label class="products-label">
                    <img class="products" alt="watch" src="images/coco oil.jpg" />
                    Coconut Oil<br/>$10
                </label>
                <input class="invisibles proname" type="text" id="oilsdata" name="oilsdata" value="Coconut Oil" /> 
                <input class="invisibles qty" type="text" id="qty" name="oilsqty" value="<?php if($_SESSION["oilsqty"]<1){echo 0 ;} else{echo $_SESSION["oilsqty"];} ?>" />
                <input class="invisibles src" type="text" id="src" name="oilssrc" value="images/coco oil.jpg" /> 
                <input class="buttons" type="button" id="oil" name="oil" value="Add to Cart" />
            </form>

            <form method="post" action="" class="product-container">
                <label>
                    <img class="products" alt="watch" src="images/face mask.jpg" />
                    Face Mask<br/>$50
                </label>
                <input class="invisibles proname" type="text" id="maskdata" name="maskdata" value="Face Mask" /> 
                <input class="invisibles qty" type="text" id="qty" name="maskqty" value="<?php if($_SESSION["maskqty"]<1){echo 0 ;} else{echo $_SESSION["maskqty"];} ?>" />
                <input class="invisibles src" type="text" id="src" name="masksrc" value="images/face mask.jpg" /> 
                <input class="buttons" type="button" id="mask" name="mask" value="Add to Cart" />
            </form>

            <form method="post" action="" class="product-container">
                <label>
                    <img class="products" alt="watch" src="images/gabriel chanel.jpg" />
                    Gabriel Chanel<br/>$150
                </label>
                <input class="invisibles proname" type="text" id="chaneldata" name="chaneldata" value="Gabriel Chanel" />
                <input class="invisibles qty" type="text" id="qty" name="chanelqty" value="<?php if($_SESSION["chanelqty"]<1){echo 0 ;} else{echo $_SESSION["chanelqty"];} ?>" />
                <input class="invisibles src" type="text" id="src" name="chanelsrc" value="images/gabriel chanel.jpg" />
                <input class="buttons" type="button" id="gabriel" name="gabriel" value="Add to Cart" />
            </form>

            <form method="post" action="" class="product-container">
                <label>
                    <img class="products" alt="watch" src="images/green loafer.jpg" />
                    Green Loafer<br/>$100
                </label>
                <input class="invisibles proname" type="text" id="loaferdata" name="loaferdata" value="Green Loafer" />
                <input class="invisibles qty" type="text" id="qty" name="loaferqty" value="<?php if($_SESSION["loaferqty"]<1){echo 0 ;} else{echo $_SESSION["loaferqty"];} ?>" />
                <input class="invisibles src" type="text" id="src" name="loafersrc" value="images/green loafer.jpg" />
                <input class="buttons" type="button" id="loafer" name="loafer" value="Add to Cart" />
            </form>

            <form method="post" action="" class="product-container">
                <label>
                    <img class="products" alt="watch" src="images/nike trainer.jpg" />
                    Nike Trainer<br/>$190
                </label>
                <input class="invisibles proname" type="text" id="trainerdata" name="trainerdata" value="Nike Trainer" />
                <input class="invisibles qty" type="text" id="qty" name="trainerqty" value="<?php if($_SESSION["trainerqty"]<1){echo 0 ;} else{echo $_SESSION["trainerqty"];} ?>" />
                <input class="invisibles src" type="text" id="src" name="trainersrc" value="images/nike trainer.jpg" />
                <input class="buttons" type="button" id="trainer" name="trainer" value="Add to Cart" />
            </form>
        </div>    
        <?php require "snippets/footer.php"; ?>
        
    </body>
</html>