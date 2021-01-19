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

    #Print/Display the navigation template
    echo $nav;

   ?>

  <div class="container">
      <h2>Coming soon...</h2>
  </div>

  <?php

    echo $footer;

  ?>