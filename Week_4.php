<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Elzero Courses">
    <!-- <meta http-equiv="refresh" content="1"> -->
    <title>Welcome To Elzero Courses</title>
    <script type="text/javascript" src="js\shortcuts-fun.js"></script>
  </head>
  <body>
    <?php
      include 'signature.php'; //header("refresh: 1;");
    ?>

    <?php
    // Task 1
    echo "<h2 style='color: #66f;'>Task 1 Result...</h2>";
    echo 10 % 20 * 15 / 3 % 190 % 10 % 400; // 0
    // Task 2
    echo "<h2 style='color: #66f;'>Task 2 Result...</h2>";

    $a = "10";

    // Needed Ouput
    // One
    echo +"$a";
    echo "<br>";
    echo gettype(+"$a");
    // Two
    echo "<br>";
    echo +$a;
    echo "<br>";
    echo gettype(+$a);
    // Three
    echo "<br>";
    echo -(-$a);
    echo "<br>";
    echo gettype(-$a);

    // For The People Who Love Searching ^_^

    // Four
    echo "<br>";
    echo (int)$a;
    echo "<br>";
    echo gettype((int)$a);
    // Five
    echo "<br>";
    echo intval($a);
    echo "<br>";
    echo gettype(intval($a));

    // Task 3
    echo "<h2 style='color: #66f;'>Task 3 Result...</h2>";

    $a = 10;
    $b = 20;
    echo ($a <=> $b);

    // Task 4
    echo "<h2 style='color: #66f;'>Task 4 Result...</h2>";

    $a = 10;
    $b = 20;
    $c = 15;
    echo "<pre>";
    var_dump($a < $b); // True
    var_dump($c > $a); // True
    var_dump($a <= $b); // True
    var_dump($a != $b); // True
    var_dump($a <> $c); // True
    var_dump($a !== $c); // True
    var_dump(gettype($a) == gettype($b)); // True
    var_dump(gettype($a) === gettype($b)); // True
    var_dump(gettype((float) $a) !== gettype($b)); // True
    echo "</pre>";

    // Task 5
    echo "<h2 style='color: #66f;'>Task 5 Result...</h2>";

    $points = 10;

    $points += true;
    $points++;
    ++$points;

    echo $points; // 13

    echo "<br>";

    // Write Your Code Here

    $points -= true + true + true;
    $points--;
    --$points;


    echo $points; // 8;

    // Task 6
    echo "<h2 style='color: #66f;'>Task 6 Result...</h2>";

    $a = "Elzero";
    $b = "Web";
    $c = "School";

    // Method One
    $d = "$a $b $c";
    echo $d . "<br>"; // Elzero Web School

    // Method Two
    $d = $a . " " . $b . " " . $c;
    echo $d . "<br>"; // Elzero Web School

    // Method Three
    $d = <<<"here"
      $a $b $c
    here;
    echo $d . "<br>"; // Elzero Web School

    // Method Four
    $d = "{$a} {$b} {$c}";

    echo $d; // Elzero Web School

    // Task 7
    echo "<h2 style='color: #66f;'>Task 7 Result...</h2>";

    $a = 10;
    $b = 20;

    echo $a + $b * $a + $b + $a * $a * $a; // 10000

    // Task 8
    echo "<h2 style='color: #66f;'>Task 8 Result...</h2>";

    // Code 1
    $a = @$b;

    // Code 2
    $f = @file("Not_A_File");

    // Code 3
    (@include("Not_A_File")) or printf("Custom Error (live)") or die("Custom Error (die)");
    ?>
    <?= MyName(); ?>

  </body>
</html>
