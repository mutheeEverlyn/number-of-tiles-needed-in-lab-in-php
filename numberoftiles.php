<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calulating number of tiles in a lab</title>
</head>
<body>
    <form method="post">
      <fieldset>
        <legend>calculating number of tiles needed in a lab</legend>
         Enter the length <br/><input type="number" name="length"><br/><br>
         Enter the width<br/><input type="number" name="width">
         <br/><br>
         <input type="submit" value="calculate" name="submit">
      </fieldset>
   </form>
   <?php
   if(isset($_post["submit"])){
    $length=$_POST["length"];
    $width=$_POST["width"];
    $area=$length*$width;
    $noOfTiles=$area/0.36;
    echo"the area of the lab is:",$area;
    echo"the number of tiles required is:" ,$noOfTiles;
   }
   ?>
</body>
</html>