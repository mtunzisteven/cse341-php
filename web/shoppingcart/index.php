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
    
        <div class="form">
            <form method="post" action="" class="product-container">
                <label>
                    <img class="products" alt="watch" src="images/fossil watch.jpg" />
                    Fossil Watch
                </label>
                <input class="invisibles" type="number" id="watchvalue" name="watchvalue" value="0" />
                <input class="buttons" id="watch" type="button" name="watch" value="Add to Cart" />
            </form>

            <?php $_session["watch"]=$_POST["watchvalue"];
            
                    echo $_session["watch"];

            ?>

            <form method="post" action="" class="product-container">
                <label>
                    <img class="products" alt="salts" src="images/bath salts.jpg" />
                    Bath Salts
                </label>
                <input class="buttons" type="button" name="salts" value="Add to Cart" />
                <input class="invisibles" type="number" id="saltsvalue" name="saltsvalue" value="0" />
            </form>

            <?php $_session["salts"]=$_POST["saltsvalue"];
            
            echo $_session["salts"];

            ?>

            <form method="post" action="" class="product-container">
                <label>
                    <img class="products" alt="watch" src="images/brikestock sandals.jpg" />
                    Brikestock Sandals    
                </label>
                <input class="buttons" type="button" name="sandals" value="Add to Cart" />
                <input class="invisibles" type="number" id="sandalsvalue" name="sandalsvalue" value="0" />
            </form>

            <?php $_session["sandals"]=$_POST["sandalsvalue"];
            
            echo $_session["sandals"];

            ?>

            <form method="post" action="" class="product-container">
                <label>
                    <img class="products" alt="watch" src="images/coco oil.jpg" />
                    Coconut Oil
                </label>
                <input class="buttons" type="button" name="oil" value="Add to Cart" />
                <input class="invisibles" type="number" id="oilvalue" name="oilvalue" value="0" />
            </form>

            <?php $_session["oil"]=$_POST["oilvalue"];
            
            echo $_session["oil"];

            ?>

            <form method="post" action="" class="product-container">
                <label>
                    <img class="products" alt="watch" src="images/face mask.jpg" />
                    Face Mask
                </label>
                <input class="buttons" type="button" name="mask" value="Add to Cart" />
                <input class="invisibles" type="number" id="maskvalue" name="maskvalue" value="0" />
            </form>

            <?php $_session["mask"]=$_POST["maskvalue"];
            
            echo $_session["mask"];

            ?>

            <form method="post" action="" class="product-container">
                <label>
                    <img class="products" alt="watch" src="images/gabriel chanel.jpg" />
                    Gabriel Chanel
                </label>
                <input class="buttons" type="button" name="gabriel" value="Add to Cart" />
                <input class="invisibles" type="number" id="gabrielvalue" name="gabrielvalue" value="0" />
            </form>

            <?php $_session["gabriel"]=$_POST["gabrielvalue"];
            
            echo $_session["gabriel"];

            ?>

            <form method="post" action="" class="product-container">
                <label>
                    <img class="products" alt="watch" src="images/green loafer.jpg" />
                    Green Loafer
                </label>
                <input class="buttons" type="button" name="loafer" value="Add to Cart" />
                <input class="invisibles" type="number" id="loafervalue" name="loafervalue" value="0" />
            </form>

            <?php $_session["loafer"]=$_POST["loafervalue"];
            
            echo $_session["loafer"];

            ?>

            <form method="post" action="" class="product-container">
                <label>
                    <img class="products" alt="watch" src="images/nike trainer.jpg" />
                    Nike Trainer
                </label>
                <input class="buttons" type="button" name="trainer" value="Add to Cart" />
                <input class="invisibles" type="number" id="trainervalue" name="trainervalue" value="0" />
            </form>
        </div>

        <?php $_session["trainer"]=$_POST["trainervalue"];
            
            echo $_session["trainer"];

        ?>
    
        <?php require "snippets/footer.php"; ?>
        
    </body>
</html>