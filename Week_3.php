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
      $course_name = 'Elzero Courses';  // task 1
    ?>
    <h1><?= $course_name // task 1 ?></h1>
    <p>Here In <?= $course_name // task 1 ?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?= $course_name // task 1 ?> Is The What You Need.</div>
    <footer>All Right Reserved To <?= $course_name // task 1 ?></footer>



    <?php
    // Task 2
    echo "<h2 style='color: #66f;'>Task 2 Result...</h2>";

    $name = "elzero";
    $$name = "Web";

    echo nl2br($$name . "\n ${$name} \n" . $elzero . "\n $elzero \n" . 'Web');

    // Task 3
    echo "<h2 style='color: #66f;'>Task 3 Result...</h2>";

    $a = 200;
    $b = &$a;
    $a = 100;

    echo $b; // 100

    // Task 4
    echo "<h2 style='color: #66f;'>Task 4 Result...</h2>";
    // echo "<pre>";
    // print_r($_SERVER);
    // echo "</pre>";
    echo $_SERVER['DOCUMENT_ROOT'] . "<br>";
    echo $_SERVER['SERVER_NAME'] . "<br>";
    echo $_SERVER['SystemRoot'] . "<br>";
    echo $_SERVER['OPENSSL_CONF'] . "<br>";

    // Task 5
    echo "<h2 style='color: #66f;'>Task 5 Result...</h2>";

    /*
      Clone _ function _ break _ array _ switch
      if _ while _ do _ foreach _ for
    */

    // define("die" , "asas");
    // echo die;

    echo "<ol>";
      $reserved_words = array("Clone", "function", "break", "foreach", "switch", "if", "while", "do", "array", "for");
      foreach ($reserved_words as $value) {
        echo "<li>";
        echo $value;
        echo "</li>";
      };
    echo "</ol>";
    // Task 6
    echo "<h2 style='color: #66f;'>Task 6 Result...</h2>";

    echo __Line__. "<br>";
    echo __FILE__ . "<br>";
    echo __DIR__ . "<br>";

    ?>

    <?= MyName(); ?>

  </body>
</html>
