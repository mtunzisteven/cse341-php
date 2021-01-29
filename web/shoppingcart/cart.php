<?php session_start(); 

            
if(isset($_POST["watchdata"])){    //Since form is submitted to this page, we capture the information here

    $_SESSION["watchdata"] = $_POST["watchdata"];

}

if(isset($_POST["saltsdata"])){    //Since form is submitted to this page, we capture the information here

    $_SESSION["saltsdata"] = $_POST["saltsdata"];

}

if(isset($_POST["oilsdata"])){    //Since form is submitted to this page, we capture the information here

    $_SESSION["oilsdata"] = $_POST["oilsdata"];

}

if(isset($_POST["sandalsdata"])){    //Since form is submitted to this page, we capture the information here

    $_SESSION["sandalsdata"] = $_POST["sandalsdata"];

}

if(isset($_POST["chaneldata"])){    //Since form is submitted to this page, we capture the information here

    $_SESSION["chaneldata"] = $_POST["chaneldata"];

}

if(isset($_POST["loaferdata"])){    //Since form is submitted to this page, we capture the information here

    $_SESSION["loaferdata"] = $_POST["loaferdata"];

}

if(isset($_POST["trainerdata"])){    //Since form is submitted to this page, we capture the information here

    $_SESSION["trainerdata"] = $_POST["trainerdata"];

}
?>

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
        

        
        <?php require "snippets/footer.php"; ?>
        
    </body>
</html>
