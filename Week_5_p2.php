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

    $index = 10;

    // Needed Output
    while ($index > 0) {
      echo "$index<br>";
      $index--;
    }
    // Task 2
    echo "<h2 style='color: #66f;'>Task 2 Result...</h2>";

    $index = 0;
    for (;$index < 21; $index+=2) {
      if ($index == 0) continue;
      echo "$index _ ";
    }
    echo "this is for loop <p>";

    $index = 0;
    while ($index <= 20) {
      if ($index == 0) {$index+=2;continue;}
      echo "$index _ ";
      $index+=2;
    }
    echo "this is while loop <p>";

    $index = 0;
    do {
      if ($index == 0) {$index+=2;continue;}
      echo "$index _ ";
      $index+=2;
    } while ($index <= 20);
    echo "this is do while loop <p>";

    // Task 3
    echo "<h2 style='color: #66f;'>Task 3 Result...</h2>";

    $num = 2;
    while ($num < 520) {
      echo --$num."<br>";
      $num += 3 + $num;
    }

    // Task 4
    echo "<h2 style='color: #66f;'>Task 4 Result...</h2>";

    $start = 10;
    $end = 0;
    $stop = 3;
    for (; $start > $end; $start--) {
      if ($start < $stop) break;
      if (strlen($start) < 2) echo "0";
      echo "$start<br>";
    }

    // Task 5
    echo "<h2 style='color: #66f;'>Task 5 Result...</h2>";

    $start = 0;
    $mix = [1, 2, 3, "A", "B", "C", 4];
    for ($start=0; $start < count($mix); $start++) {
      if (is_numeric($mix[$start]) == false || $mix[$start] <= 1) {
        continue;
      }
      echo "$mix[$start]<br>";
    }

    // Task 6
    echo "<h2 style='color: #66f;'>Task 6 Result...</h2>";

    $money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];
    foreach ($money as $name => $money) {
      echo "The Name Is {$name} And I Need {$money} Pound From Him<br>";
    }

    // Task 7
    echo "<h2 style='color: #66f;'>Task 7 Result...</h2>";

    $mix = [1, 2, "A", "B", "C", 3, 4];
    $p = 0;
    $i = 0;
    foreach ($mix as $value) {
      if (is_numeric($value) == false) {
        $i++;
        continue;
      }else {
        $p++;
      }
      echo "$value<br>";
    }
    echo "$p Numbers Printed<br>";
    echo "$i Letters Ignored";

    // Task 8
    echo "<h2 style='color: #66f;'>Task 8 Result...</h2>";

    $nums = [1, 13, 12, 20, 51, 17, 30];
    foreach ($nums as $value) {
      if ($value % 2 == 0) {
        $value /= 2;
        echo "$value<br>";
      }
    }

    // Task 9
    echo "<h2 style='color: #66f;'>Task 9 Result...</h2>";

    $help_num = 3;
    $nums = [4, 5, 6, 1, 2, 3];
    $names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];
    $index = $nums[$help_num];
    for (; $index < $help_num; $index++) {
      echo "$names[$index]<br>";
    }

    // Task 10
    echo "<h2 style='color: #66f;'>Task 10 Result...</h2>";

    $help_num = 4;
    $nums = [2, 4, 5, 6, 10];

    foreach ($nums as $value) {
      $nums[$help_num];
      echo "\"{$value} + {$nums[$help_num]} = ".$value + $nums[$help_num]."\"<br>";
      $help_num--;
    }
    ?>
    <?= MyName(); ?>

  </body>
</html>
