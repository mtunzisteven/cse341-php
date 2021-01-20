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

    #Specify the place where the changes will occure: $nav
    $nav = str_replace ( "{PAGE}" , $page_name , $nav );

    #Print/Display the navigation template
    echo $nav;

   ?>

   <div class="container">
     <p>
       My name is Mtunzi Steven Mavuma. I live in Durban, South Africa. I love to dance and swim. 
       Programming is one of my favorite things to do because I get to create new things and solve problems.
       I want to master PHP because I want to be able to create web applications that solve problems in my 
       community.
     </p>
   </div>

  <?php

    echo $footer;

  ?>