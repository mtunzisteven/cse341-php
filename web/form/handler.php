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

      
  </style>
 </head>
 <body>

    <?php echo '<h4>User Name: <p>'.$_POST["name"].'</p></h4>'; 
          echo '<h4>User Email Address: <a href="mailto:"'.$_POST["email"].'>'.$_POST['email'].'</a></h4>'; 
          echo '<h4>Major: <p>'.$_POST["major"].'</p></h4>';
          echo '<h4>Comments: <p>'.$_POST["comments"].'</p></h4>';
        
          if(!empty($_POST["continents"])){

            #echo '<h4>Continents Visited: </h4>';

            #foreach($_POST["continents"] as $visited){
                #echo '<h5>'.$visited.'</h5>';
            #}

            echo '<h4>Continents Visited: <p>'.implode(", ",$_POST["continents"]).'</p></h4>';
          }
              
    ?>

 </body>
</html>