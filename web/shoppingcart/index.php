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
        
        <?php require "snippets/header.php"; 
            
            if(isset($_POST["watchdata"])){    //Since form is submitted to this page, we capture the information here

                $_SESSION["watchdata"] = $_POST["watchdata"];
            
                echo $_session["watchdata"];
            }

        ?>
    
        <div class="form">
            <form id="form1" method="post" action="index.php" class="product-container">
                <label id="watch-label">
                    <img class="products" alt="watch" src="images/fossil watch.jpg" />
                    Fossil Watch
                </label>
                <input class="invisibles values" type="number" id="watchvalue" name="watchvalue" value="0" />
                <input class="invisibles proname" type="text" id="watchdata" name="watchdata" value="Fossil Watch" /> 
                <input class="buttons" id="watch" type="submit" name="watch" value="Add to Cart" />
            </form>

            <form id="form2" method="post" action="" class="product-container">
                <label  id="salts-label">
                    <img class="products" alt="salts" src="images/bath salts.jpg" />
                    Bath Salts
                </label>
                <input class="invisibles" type="number" id="saltsvalue" name="saltsvalue" value="0" />
                <input class="invisibles" type="text" id="saltsdata" name="saltsdata" value="" /> 
                <input class="buttons" id="salts" onclick="clicks()" type="button" name="salts" value="Add to Cart" />
            </form>

            <?php $_session["salts"]=$_POST["saltsvalue"];
            echo $_session["salts"];

            ?>

            <form method="post" action="" class="product-container">
                <label>
                    <img class="products" alt="watch" src="images/brikestock sandals.jpg" />
                    Brikestock Sandals    
                </label>
                <input class="buttons" type="button" id="sandals" name="sandals" value="Add to Cart" />
                <input class="invisibles" type="number" id="sandalsvalue" name="sandalsvalue" value="0" />
            </form>

            <?php $_session["sandals"]=$_POST["sandalsvalue"];
            
            echo $_session["sandals"];

            ?>

            <form method="post" action="" class="product-container">
                <label class="products-label">
                    <img class="products" alt="watch" src="images/coco oil.jpg" />
                    Coconut Oil
                </label>
                <input class="buttons" type="button" id="oil" name="oil" value="Add to Cart" />
                <input class="invisibles" type="number" id="oilvalue" name="oilvalue" value="0" />
            </form>

            <?php $_session["oil"]=$_POST["oilvalue"];
            
            echo $_session["oil"];

            echo $_POST["oilvalue"];

            ?>

            <form method="post" action="" class="product-container">
                <label>
                    <img class="products" alt="watch" src="images/face mask.jpg" />
                    Face Mask
                </label>
                <input class="buttons" type="button" id="mask" name="mask" value="Add to Cart" />
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
                <input class="buttons" type="button" id="gabriel" name="gabriel" value="Add to Cart" />
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
                <input class="buttons" type="button" id="loafer" name="loafer" value="Add to Cart" />
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
                <input class="buttons" type="button" id="trainer" name="trainer" value="Add to Cart" />
                <input class="invisibles" type="number" id="trainervalue" name="trainervalue" value="0" />
            </form>
        </div>

        <?php $_session["trainer"]=$_POST["trainervalue"];
            
            echo $_session["trainer"];

        ?>
    
        <?php require "snippets/footer.php"; ?>
        
    </body>
</html>