<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Stuff</title>
    <link rel="stylesheet" href="Style.css">
  </head>
  <body>
    <div class="banner.container">

      <div class="logo">
          Australia Does Not Exist
          <img src="Grid demo/Ben.jpg" alt="Ben">

      </div>
      <div class="links">
        <a href="Grid demo/Ethan.Fan.Page.html"></a>

      </div>
    </div>


    <?php

    echo "<p>Ethan Adams</p>";

    $name = "  Ethan Adams";
    echo "<p>hello ".$name. "</p>";

    $name = " Ben McKeown";
      echo "<p>hello ". $name. "</p>";

    $number = 16;

    echo "<p>".$number * 10  . "</p>";

    if ($number < 16) {
        echo "Sup oi";
      } else if ($number > 16){
        echo "ur wrong boi";
      } else {
        echo "<p>number is 16". "</p>";
      }
      $counter = 10;

      do {
        echo "<p>$counter </p>";
        $counter = $counter - 1;
      } while ($counter >= 0);

     ?>
  </body>
</html>
