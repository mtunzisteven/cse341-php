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
                    Fossil Watch
                </label>
                <input class="invisibles proname" type="text" id="watchdata" name="watchdata" value="Fossil Watch" /> 
                <input class="buttons" id="watch" type="submit" name="watch" value="Add to Cart" />
            </form>

            <form id="form" method="post" action="" class="product-container">
                <label  id="salts-label">
                    <img class="products" alt="salts" src="images/bath salts.jpg" />
                    Bath Salts
                </label>
                <input class="invisibles" type="text" id="saltsdata" name="saltsdata" value="Bath Salts" /> 
                <input class="buttons" id="salts" type="button" name="salts" value="Add to Cart" />
            </form>

            <form method="post" action="" class="product-container">
                <label>
                    <img class="products" alt="watch" src="images/brikestock sandals.jpg" />
                    Brikestock Sandals    
                </label>
                <input class="invisibles" type="text" id="sandalsdata" name="sandalsdata" value="Brikestock Sandals" /> 
                <input class="buttons" type="button" id="sandals" name="sandals" value="Add to Cart" />
            </form>

            <form method="post" action="" class="product-container">
                <label class="products-label">
                    <img class="products" alt="watch" src="images/coco oil.jpg" />
                    Coconut Oil
                </label>
                <input class="invisibles" type="text" id="oilsdata" name="oilsdata" value="Coconut Oil" /> 
                <input class="buttons" type="button" id="oil" name="oil" value="Add to Cart" />
            </form>

            <form method="post" action="" class="product-container">
                <label>
                    <img class="products" alt="watch" src="images/face mask.jpg" />
                    Face Mask
                </label>
                <input class="invisibles" type="text" id="maskdata" name="maskdata" value="Face Mask" /> 
                <input class="buttons" type="button" id="mask" name="mask" value="Add to Cart" />
            </form>

            <form method="post" action="" class="product-container">
                <label>
                    <img class="products" alt="watch" src="images/gabriel chanel.jpg" />
                    Gabriel Chanel
                </label>
                <input class="invisibles" type="text" id="chaneldata" name="chaneldata" value="Gabriel Chanel" />
                <input class="buttons" type="button" id="gabriel" name="gabriel" value="Add to Cart" />
            </form>

            <form method="post" action="" class="product-container">
                <label>
                    <img class="products" alt="watch" src="images/green loafer.jpg" />
                    Green Loafer
                </label>
                <input class="invisibles" type="text" id="loaferdata" name="loaferdata" value="Green Loafer" />
                <input class="buttons" type="button" id="loafer" name="loafer" value="Add to Cart" />
            </form>

            <form method="post" action="" class="product-container">
                <label>
                    <img class="products" alt="watch" src="images/nike trainer.jpg" />
                    Nike Trainer
                </label>
                <input class="invisibles" type="text" id="trainerdata" name="trainerdata" value="ike Trainer" />
                <input class="buttons" type="button" id="trainer" name="trainer" value="Add to Cart" />
            </form>
        </div>    
        <?php require "snippets/footer.php"; ?>
        
    </body>
</html>