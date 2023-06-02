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

    $a = 100;
    $b = 200;
    $c = 100;

    /*
      Check That:
      Variable "b" Larger Than Variable "a"
      Variable "a" Identical To Variable "c"
      Variable "a" Plus Variable "c" Identical To Variable "b"
      */
      if($b > $a && $a === $c && ($a + $c) === $b){
        echo "Yes";
      }

      // Task 2
      echo "<h2 style='color: #66f;'>Task 2 Result...</h2>";

      // Test Case 1
    $a = 100;
    $b = 200;
    $c = 300;

    if ($a < $b && $a < $c) {
      echo "A Is Not Larger Than B Or C <br>";
    }
    // A Is Not Larger Than B Or C

    // Test Case 2
    $a = 200;
    $b = 100;
    $c = 300;

    if ($a > $b) {
      echo "A Is Larger Than B <br>";
    }

    // A Is Larger Than B

    // Test Case 3
    $a = 200;
    $b = 200;
    $c = 100;

    if ($a > $c) {
      echo "A Is Larger Than c";
    }

    // A Is Larger Than c

    // Task 3
    echo "<h2 style='color: #66f;'>Task 3 Result...</h2>";

    echo <<<loginform
    <form action="" method="POST">
      <input type="text" name="user">
      <input type="submit" value="Send">
    </form>
    loginform;

    $admins = ["Osama", "Ahmed", "Sayed"];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $Username = $_POST["user"];
      echo "The Request Method Is Post And Username Is {$Username} <br>";
      foreach ($admins as $admin_name) {
        if ($admin_name == $Username) {
          echo "This Username {$Username} Is Admin";
        }
      }
    }

    // Task 4
    echo "<h2 style='color: #66f;'>Task 4 Result...</h2>";

    $a = 30;
    $b = 20;
    $c = 10;
    echo ($a + $b === $c ? "A + B = C" : ($a + $c === $b ? "A + C = B" : ($b + $c === $a ? "B + C = A" : "The End"))); // "B + C = A"

    // Task 5
    echo "<h2 style='color: #66f;'>Task 5 Result...</h2>";

    $name = "Osama";
    $age = 40;
    $country = "Egypt";

    // if ($age > 18) {
    //   echo "The Age Is Good To Go<br>";
    //   if (gettype($name) === "string") {
    //     echo "The Name Is Good To Go<br>";
    //     if ($country === "Egypt") {
    //       echo "The Country Is Good To Go<br>";
    //     }
    //   }
    // }

    // Needed Output
    echo ($age > 18 && gettype($name) === "string" && $country === "Egypt" ? "The Age Is Good To Go<br>The Name Is Good To Go<br>The Country Is Good To Go<br>" :'');

    echo "#######################################";
    echo "Alert";
    echo "#######################################";
    // "The Age Is Good To Go"
    // "The Name Is Good To Go"
    // "The Country Is Good To Go"

    // Task 6
    echo "<h2 style='color: #66f;'>Task 6 Result...</h2>";

    $genre = "Hack And Slash";
    switch ($genre) {
      case "RPG":
        echo "I Recommend Ys Games";
        break;
      case "Hack And Slash":
        echo "I Recommend Castlevania Games";
        break;
      case 'FPS':
        echo "I Recommend Uncharted Games";
        break;
      case 'Platform':
        echo "I Recommend Megaman Games";
        break;
      case 'Puzzle':
         echo "I Recommend Megaman Games";
        break;
      default:
        echo "I Recommend Shadow Of Mordor And Shadow Of War";
        break;
    }
    // Needed Output
    // "I Recommend Castlevania Games"

    // Task 7
    echo "<h2 style='color: #66f;'>Task 7 Result...</h2>";

    $num_one = 23;
    $num_two = 5;
    $op = "+";

    echo ($op == "+" ? $num_one + $num_two : ($op == "-" ? $num_one - $num_two : ($op == "/" ? (int)($num_one / $num_two) . "<br>" . $num_one % $num_two : ($op == "*" ? $num_one * $num_two : "Unknown Operation"))));

    // Task 8
    echo "<h2 style='color: #66f;'>Task 8 Result...</h2>";

    $day = "Sat";

    if ($day == "Sat" || $day == "Sun" || $day == "Mon") {
      echo "We Are Open All The Day";
    }elseif ($day == "Tue" || $day == "Wed") {
      echo "We Are Open From 08:12";
    }elseif ($day == "Thu" || $day == "Fri") {
      echo "We Are Closed";
    }else {
      echo "Unknown Day";
    }
    ?>
    <?= MyName(); ?>

  </body>
</html>
