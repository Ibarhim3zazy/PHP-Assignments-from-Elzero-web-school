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

      function greeting($Name, $Gender='')
      {
        if ($Gender == "Male") {
          echo "Hello Mr $Name";
          echo "<br>";
        }elseif($Gender == "Female") {
          echo "Hello Miss $Name";
          echo "<br>";
        }else {
          echo "Hello $Name";
          echo "<br>";
        }
      }
      echo greeting("Osama", "Male"); // Hello Mr Osama
      echo greeting("Eman", "Female"); // Hello Miss Eman
      echo greeting("Sameh"); // Hello Sameh

      echo "<h2 style='color: #66f;'>Task 2 Result...</h2>";

      function get_arguments(...$args)
      {
        foreach ($args as $value) {
          echo "$value ";
        }
        echo "<br>";
      }
      echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
      echo get_arguments("I", "Love", "PHP"); // I Love PHP

      echo "<h2 style='color: #66f;'>Task 3 Result...</h2>";

      function sum_all(...$nums)
      {
        $result = 0;
        foreach ($nums as $num) {
          if ($num === 5) {
            continue;
          }elseif ($num === 10) {
            $num = 20;
          }
          $result += $num;
        }
        return $result;
      }

      echo sum_all(10, 12, 5, 6, 6, 10) . "<br>"; // 64
      echo sum_all(5, 10, 5, 10); // 40

      echo "<h2 style='color: #66f;'>Task 4 Result...</h2>";

      function multiply(...$args)
      {
        $result = 1;
        foreach ($args as $arg) {
          if (is_numeric($arg) == false) {
            continue;
          }
          if (is_double($arg) == true) {
            $arg = (int)$arg;
          }
          $result *= $arg;
        }
        return $result . "<br>";
      }

      echo multiply(10, 20); // 200
      echo multiply("A", 10, 30); // 300
      echo multiply(100.5, 10, "B"); // 1000

      echo "<h2 style='color: #66f;'>Task 5 Result...</h2>";

      function check_status($a, $b, $c) {
        $check_status_text = [$a, $b, $c];
        foreach ($check_status_text as $value) {
          if (is_int($value)) {
            $age = $value;
          }elseif (is_bool($value) == false && is_string($value) == true) {
            $name = $value;
          }elseif (is_bool($value)) {
            $statue = $value;
          }
        }
        if ($statue == true) {
          $statue = "You Are Available For Hire";
        }else {
          $statue = "You Are Not Available For Hire";
        }
        return @"Hello $name, Your Age Is $age, $statue <br>";
      }

      // Needed Output
      echo check_status("Osama", 38, false); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
      echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
      echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
      echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"

      echo "<h2 style='color: #66f;'>Task 6 Result...</h2>";

      function calculate($num1, $num2, $calc = "add")
      {
        $multiply = "multiply";
        $subtract = "subtract";
        $add = "add";
        $multiply_result = true;
        $subtract_result = true;
        $add_result = true;
        for ($i=0; $i < strlen($calc); $i++) {
          if ($calc[$i] != $multiply[$i]) {
            $multiply_result = false;
            break;
          }
        }
        if ($multiply_result != true) {
          for ($i=0; $i < strlen($calc); $i++) {
            if ($calc[$i] != $subtract[$i]) {
              $subtract_result = false;
              break;
            }
          }
        }
        if ($subtract_result != true) {
          for ($i=0; $i < strlen($calc); $i++) {
            if ($calc[$i] != $add[$i]) {
              $add_result = false;
              break;
            }
          }
        }
        if ($multiply_result === true) {
          $result = $num1 * $num2;
        }elseif ($subtract_result === true) {
          $result = $num1 - $num2;
        }elseif ($add_result === true) {
          $result = $num1 + $num2;
        }else {
          $result = "this operation not found, Please try again.";
        }
        return $result . "<br>";
      }

      echo calculate(10, 20); // 30
      echo calculate(10, 20, "a"); // 30
      echo calculate(10, 20, "s"); // -10
      echo calculate(10, 20, "subtract"); // -10
      echo calculate(10, 20, "multiply"); // 200
      echo calculate(10, 20, "m"); // 200

      echo "<h2 style='color: #66f;'>Task 7 Result...</h2>";

      function calculateX(int $num_one, int $num_two) : float {
        return $num_one + $num_two;
      }

      echo calculateX(20, 10) . "<br>"; // 30
      echo gettype(calculateX(20, 10)); // Double

      echo "<h2 style='color: #66f;'>Task 8 Result...</h2>";

      $message = "Hello";
      $$message = function ($name) use ($message)
      {
        return "$message $name";
      };

      echo $Hello("Osama"); // Hello Osama

      echo "<h2 style='color: #66f;'>Task 9 Result...</h2>";

      $greet = function ($name)
      {
        return "Welcome $name (Anonymous function)";
      };

      echo $greet("Osama"); // Greetings

      echo "<br>";

      $greet = fn($name) => "Welcome $name (Arrow function)";

      echo $greet("Osama"); // Greetings

    ?>
    <?= MyName(); ?>

  </body>
</html>
