
<?php
   
    $nav_template = "nav.php";
    $footer_template = "footer.php";

    #check whether template exists, if not, cancel program.
    if(file_exists($nav_template) and file_exists($footer_template)){
      $nav = file_get_contents($nav_template);
      $footer = file_get_contents($footer_template);
    }
    else{
	    die("File not found!");
    }

    #Set page title
    $short_code = array(
      "{PAGE}" => "Assignments"
    );

    $title = $short_code['{PAGE}'];

    #Replace short codes on teplate with actual desired data
    foreach(array_keys($short_code) as $k){
      if(strlen($k)>2 && trim($k)!=""){
          $content = str_replace($k,$short_code[$k],$content);
      }
      else{
          echo "short codes error!";
      }
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