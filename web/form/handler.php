<!DOCTYPYE html>
<html lang="en-us">
 <head>
  <title>Handler</title>
  <meta charset="utf8">
  <style>
      body{
          background-color: tomato;
          padding: 15% 25%;
          text-align: left;
          color:blanchedalmond;
      }

      h4{
          display: inline;
      }
      
  </style>
 </head>
 <body>

    <?php 
          $continents = "";
   
          echo '<h4>User Name: </h4><span>'.$_POST["name"].'</span><br/>'; 
          echo '<h4>User Email Address: <a href="mailto:"'.$_POST["email"].'>'.$_POST['email'].'</a></h4><br/>'; 
          echo '<h4>Major: </h4><span>'.$_POST["major"].'</span><br/>';
          echo '<h4>Comments: </h4><span>'.$_POST["comments"].'</span><br/>';

          
        
          if(!empty($_POST["continents"])){
            
            echo  '<h4>Continents Visited: </h4>';

            foreach($_POST["continents"] as $continent){

                $_count = 0;

                switch($continent){
                    case "na":
                      $continent = "North America";
                      break;
                  case "sa":
                      $continent = "South America";
                      break;
                  case "a1":
                      $continent = "Asia";
                      break;
                  case "a2":
                      $continent = "Australia";
                      break;
                  case "e":
                      $continent = "Europe";
                      break;
                  case "a3":
                      $continent = "Africa";
                      break;
                  case "a4":
                      $continent = "Antarctica";
                      break;
                }

                if($_count!=count($_POST["continents"])){
                    echo '<span>'.$continent.'</span>, ';
                }

                else{
                    echo '<span>'.$continent.'</span>';
                }

                $_count =$_count +1;

                echo "my count: ".$_count."Array count: ".$_POST["continents"];
                    
            }
            

          }
              
    ?>

 </body>
</html>