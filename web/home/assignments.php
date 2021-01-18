<!DOCTYPE html>
<html lang="en-us">
 <head>
  <title>Assignments</title>
  <meta charset="utf-8">
  <meta content="author" name="Mtunzi Mavuma" >
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 </head>
 <body>
   <?php
   
    $nav_template = "nav.html";

    #check whether template exists, if not, cancel program.
    if(file_exists($nav_template)){
	    $nav = file_get_contents($nav_template);
    }
    else{
	    die("File not found!");
    }

    #Print/Display the navigation template
    echo $nav;

   ?>

   <div>
   </div>

   <?php
   
    $footer_template = "footer.html";

    #check whether template exists, if not, cancel program.
    if(file_exists($footer_template)){
	    $footer = file_get_contents($footer_template);
    }
    else{
	    die("File not found!");
    }

    #Print/Display the navigation template
    echo $footer;

   ?>

 <script src="functions.js"></script>
 </body>
</html>