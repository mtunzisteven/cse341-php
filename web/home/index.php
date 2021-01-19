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
    $page_name = "Home";

    $nav = str_replace ( "{PAGE}" , $page_name , $nav );

    #Print/Display the navigation template
    echo $nav;

   ?>

   <div class="container">
   </div>

  <?php

    echo $footer;

  ?>