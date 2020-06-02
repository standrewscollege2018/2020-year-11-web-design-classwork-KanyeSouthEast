<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FizzBuzz</title>
  </head>
  <body>
    <?php
    $numb = 0;
    do{
      $numb = $numb + 1;

      if ($numb % 3 ==0 and $numb % 5 ==0) {
        echo "<p> FizzBuzz! </p>";
      }
      elseif ($numb % 5 ==0) {
        echo "<p> fizz </p>";
      }
      elseif ($numb % 3 ==0) {
        echo "<p> buzz </p>";
      }
      else {
        echo "<p> $numb </p>" ;
      }

    }while ($numb < 100);

     ?>

  </body>
</html>
