<?php session_start(); 

            
if(isset($_POST["watchdata"])){    //Since form is submitted to this page, we capture the information here

    $_SESSION["watchdata"] = $_POST["watchdata"];

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
        
        <?php require "snippets/header.php"; 
        
        echo '<h1>'.$_SESSION["watchdata"].'</h1>';
        ?>
        
        <?php require "snippets/footer.php"; ?>
        
    </body>
</html>
