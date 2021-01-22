<!DOCTYPYE html>
<html lang="en-us">
 <head>
  <title>Handler</title>
  <meta charset="utf8">
  <style>
      body{
          background-color: tomato;
          padding: 15% 20%;
          text-align: left;
          color:blanchedalmond;
      }

      h4{
          display: inline;
      }

      
  </style>
 </head>
 <body>

    <?php echo '<h4>User Name: </h4><span>'.$_POST["name"].'</span>'; 
          echo '<h4>User Email Address: <a href="mailto:"'.$_POST["email"].'>'.$_POST['email'].'</a></h4>'; 
          echo '<h4>Major: </h4><span>'.$_POST["major"].'</span>';
          echo '<h4>Comments: </h4><span>'.$_POST["comments"].'</span>';
        
          if(!empty($_POST["continents"])){

            #echo '<h4>Continents Visited: </h4>';

            #foreach($_POST["continents"] as $visited){
                #echo '<h5>'.$visited.'</h5>';
            #}

            echo '<h4>Continents Visited: </h4><span>'.implode(", ",$_POST["continents"]).'</span>';
          }
              
    ?>

 </body>
</html>