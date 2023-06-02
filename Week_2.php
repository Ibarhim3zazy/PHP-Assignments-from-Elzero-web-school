<?php
include 'signature.php';
Note();

  // Task 1
  echo "<h2 style='color: #66f;'>Task 1 Result...</h2>";

echo (int) (15.2 + 14.7 + (10.5 + 10.5)) .'<br>'; // 50
echo gettype((int) (15.2 + 14.7 + (10.5 + 10.5))); // Integer

// Task 2
echo "<h2 style='color: #66f;'>Task 2 Result...</h2>";

echo gettype(100) .'<br>'; // Method One
print gettype(100).'<br>'; // Method Two
var_dump(100); // Method Three => Optional

// Task 3
echo "<h2 style='color: #66f;'>Task 3 Result...</h2>";

echo "
// Needed Output <br>
// Hello \"Elzero\" \\\\ \"\"\" We Love \"$\$PHP\"
";

// Task 4
echo "<h2 style='color: #66f;'>Task 4 Result...</h2>";

echo nl2br("We \n Love \n Elzero \n Web \n School");

// Task 5
echo "<h2 style='color: #66f;'>Task 5 Result...</h2>";

echo <<<'now'
  Hello "'Elzero'"
  We Love $Programming$
  Languages Specially "PHP"
now;

// Task 6
echo "<h2 style='color: #66f;'>Task 6 Result...</h2>";
$something = "Programming";

echo <<<code
        Hello \PHP\
        We Love $something
code;

// Task 7
echo "<h2 style='color: #66f;'>Task 7 Result...</h2>";

echo (bool)"Hello PHP";
echo '<br>';
echo gettype((int)"Hello PHP");


// Task 8
echo "<h2 style='color: #66f;'>Task 8 Result...</h2>";

echo "<pre>";
print_r(
  ["FrontEnd" =>[
  "HTML",
  "CSS",
  "JS" => [
    "Vuejs" => [
      "2" => "v2",
      "3" => "v3"
    ],
    "Reactjs",
    "Svelte"
    ]
    ],
    "BackEnd" => [
      "PHP",
      "MySQL",
      "Security"
    ],
      "Git",
      "Github",
      "Testing" => [
        "Unit Testing",
        "End To End",
        "Integration"
        ]
      ]
);
echo "</pre>";


MyName();
