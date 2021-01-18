<!DOCTYPE html>
<html lang="en-us">
 <head>
  <title>Assignments</title>
  <meta charset="utf-8">
  <meta content="author" name="Mtunzi Mavuma" >
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php echo '<link rel="stylesheet" href="style.css" type="text/css">'; ?>

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

   <div class="container">
     <h2>Coming soon...</h2>
   </div>
   <footer>
        <div class="footer-div">
            <a href="https://byui.edu">&copy; 2021 BYU-Idaho | CSE341</a>
        </div>
   </footer>

 <script src="functions.js"></script>
 </body>
</html>