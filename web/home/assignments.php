<?php
   
   $nav_template = "nav.php";
   $footer_template = "footer.php";

   #check whether templates exists, if not, cancel program.
   if(file_exists($nav_template) and file_exists($footer_template)){
     $nav = file_get_contents($nav_template);
     $footer = file_get_contents($footer_template);
    }
    else{
	    die("File not found!");
    }

    #Replace page title
    $page_name = "Assignments";

    #Specify the place where the changes will occure: $nav
    $nav = str_replace( "{PAGE}" , $page_name , $nav );

    #Print/Display the navigation template
    echo $nav;

   ?>

  <div class="container">
      <p class="soon"><a href="../shoppingcart/" title="Shopping Cart">Assignment: Shopping Cart</a></p>
  </div>

  <?php

    echo $footer;

  ?>