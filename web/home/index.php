   <?php
   
    $nav_template = "nav.php";

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
   </div>

   <footer>
        <div class="footer-div">
            <a href="https://byui.edu">&copy; 2021 BYU-Idaho | CSE341</a>
        </div>
   </footer>

 <script src="functions.js"></script>
 </body>
</html>