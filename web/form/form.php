<!DOCTYPYE html>
<html lang="en-us">
 <head>
  <title>form</title>
  <meta charset="utf8">
  <style>
      body{
          background-color: tomato;
          padding: 5px 30%;
      }

      form{
          
          background-color: teal;
          padding:20%;

      }

      .long{
          width:100%;
      }

      button{
          background-color:yellow;
          
      }

  </style>
 </head>
 <body>

  <form method="POST" action="handler.php">
      <label class="long">
        <div>Name</div>
        <input class="long" type="text" name="name" />
      </label><br/>
      <label class="long">
        <div>Email</div>
        <input class="long" type="text" name="email" />
      </label><br/><hr/>
        <?php

            $majors = ["Computer Science", 
                      "Web Design and Development", 
                      "Computer information Technology", 
                      "Computer Engineering"
                     ];
      
            echo '<div>Majors</div>';
            foreach($majors as $major){

            echo '<label><input id="major" type="radio" name="major" value="'. htmlspecialchars($major).'" />'.$major.'</label><br/>';
            }
            echo '<hr/>';
        ?>


        <div>Continents Visited</div>
        <label>
            <input type="checkbox" name="continents[]" value="na" />
            North America
        </label><br/>
        <label>
            <input type="checkbox" name="continents[]" value="sa" />
            South America
        </label><br/>
        <label>
            <input type="checkbox" name="continents[]" value="e" />
            Europe
        </label><br/>
        <label>
            <input type="checkbox" name="continents[]" value="a1" />
            Asia
        </label><br/>
        <label>
            <input type="checkbox" name="continents[]" value="a2" />
            Australia
        </label><br/>
        <label>
            <input type="checkbox" name="continents[]" value="a3" />
            Africa
        </label><br/>
        <label>
            <input type="checkbox" name="continents[]" value="a4" />
            Antarctica
        </label><br/><hr/>

      <label class="long">
        <div>Comments</div>
        <textarea class="long" id="comments" rows="5" name="comments" ></Textarea>
      </label>
      <input class="button" type="submit" value="sumbmit">

  </form>
 </body>
</html>