<!DOCTYPYE html>
<html lang="en-us">
 <head>
  <title>Handler</title>
  <meta charset="utf8">
  <style>
      body{
          background-color: tomato;
          padding: 15% 30%;
          text-align: left;
          color:blanchedalmond;
      }

      
  </style>
 </head>
 <body>

    <?php echo '<h4>User Name: '.$_POST["name"].'</h4>'; 
          echo '<h4>User Email Address: <a href="mailto:"'.$_POST["email"].'>'.$_POST['email'].'</a></h4>'; 
          echo '<h4>Major: '.$_POST["major"].'</h4>';
          echo '<h4>Comments: '.$_POST["comments"].'</h4>';
        
          if(!empty($_POST["continents"])){

            #echo '<h4>Continents Visited: </h4>';

            #foreach($_POST["continents"] as $visited){
                #echo '<h5>'.$visited.'</h5>';
            #}

            echo '<h4>Continents Visited: '.implode(", ",$_POST["continents"]).'</h4>';
          }
              
    ?>

 </body>
</html>