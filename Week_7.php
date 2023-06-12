<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Elzero Courses">
    <title>Welcome To Elzero Courses</title>
  </head>
  <body>
    <?php
      include 'signature.php';
      echo "<h2 style='color: #66f;'>Task 1 Result...</h2>";

      $num_one = -1;
      $num_two = 2.5;

      $let_one = "o";
      $let_two = "z";

      $str = "El%er0";

      $str[$num_one] = $let_one;
      $str[(int)$num_two] = $let_two;

      echo $str; // Elzero

      echo "<h2 style='color: #66f;'>Task 2 Result...</h2>";

      $str = "Orezle";

      echo ucfirst(strtolower(strrev($str))); // Elzero

      echo "<h2 style='color: #66f;'>Task 3 Result...</h2>";

      $str = 'aAa';
      $num = 3;
      $char = "_";

      echo str_repeat(strtolower($str).$char,$num); // aaa_aaa_aaa_

      echo "<h2 style='color: #66f;'>Task 4 Result...</h2>";

      $str = "<div><b>Elzero</b></div>";

      echo strip_tags($str,'<b>'); // <b>Elzero</b>

      echo "<h2 style='color: #66f;'>Task 5 Result...</h2>";

      $str = "Elzero Web School";
      $e = "e";
      $o = "O";
      $four = 4;

      echo substr_count($str, $e, $four); // 1
      echo "<br>";
      echo substr_count($str, strtolower($o), -$four); // 2

      echo "<h2 style='color: #66f;'>Task 6 Result...</h2>";

      $chars = ["E", "l", "z", "e", "r", "o"];

      echo implode($chars); // "Elzero"

      echo "<h2 style='color: #66f;'>Task 7 Result...</h2>";

      $chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
      $str_ = "";

      foreach ($chars as $value) {
        if (!is_numeric($value)) {
          $str_ .= strtolower($value); // "Elzero"
        }
      }

      echo ucfirst($str_);

    ?>
    <?= MyName(); ?>

  </body>
</html>
