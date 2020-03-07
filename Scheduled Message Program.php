<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        body {background-color: pink;
        text-align: center;
        font-size: 55px;
        } 
        /*Changed the background color, size of font, and centered the text.*/
        p{color: aqua;
          border: 5px solid DodgerBlue;
        }
        /*Added a border and changed color of the text*/
    </style>
  </head>
  <body>
       
    <?php
      $dayofweek = date("w");
        
      switch ($dayofweek) {
        case 1:
          echo "It is Monday!";
          break;
        case 2:
          echo "It is Tuesday!";
          break;
        case 3:
          echo "It is Wednesday!";
          break;
        case 4:
          echo "It is Thursday!";
          break;
        case 5:
          echo "It is Friday!";
          break;
        case 6: 
          echo "<p>It is Saturday!</p>";
            /*Changed the color of "It is Saturday!" to aqua.*/
          break;
        case 0:
          echo "It is Sunday!";
          break;
        default:
          echo "Error!";
          break;
      }
    ?>
  </body>
</html>