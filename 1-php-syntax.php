<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  $name = "Razan";
  echo "Hello all from $name";
  echo phpversion();


  // this is a comment
  /* This is a
  multi-line comment */


  // All the below are same 
  // In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.
  echo "Hello World!<br>";
  // ECHO "Hello World!<br>";
  // EcHo "Hello World!<br>";
  

  // Note: However; all PHP variable names are case-sensitive!
  // $COLOR is not same as $color
  $color = "red";
  echo "My car is " . $color . "<br>";
  // echo "My house is " . $COLOR . "<br>";
  // echo "My boat is " . $coLOR . "<br>";
  

  $txt = "Website Course";
  echo "I hate $txt!";


  // PHP Concatenation & String Concatenation
  $x = "Hello";
  $y = "World";
  $z = $x . $y;
  // $z = $x . " " . $y;
  // $z = "$x $y";
  echo $z;

  $txt1 = "Learn PHP";
  echo "<h2>" . $txt1 . "</h2>";
  echo "<h2> $txt1 </h2>";


  // The var_dump() function returns the data type and the value:
  $x = 5;
  var_dump($x);
  echo "<br>";
  $cars = array("Volvo", "BMW", "Toyota");
  var_dump($cars);
  echo "<br>";


  // Change Data Type casting
  $x = 5;
  $x = (string) $x;
  var_dump($x);
  echo "<br>";


  // PHP String >> Double or Single Quotes?
  $user1 = "John";
  echo "Hello $user1";
  echo "<br>";
  $user2 = "John";
  echo 'Hello $user2';


  // String Length
  echo "<br>";
  echo strlen("Hello world!");


    // or using const بالعادة بكون كابيتل لتر
    const MYCAR = "Volvo";
  // Create a PHP Constant
  echo "<br>";
  define("GREETING", "Welcome to HTU!");
  echo GREETING;
  echo "<br>";
  
  echo MYCAR;


  // Ternary IF
  echo "<br>";
  $a = 13;
  if(a<10){
    b='Hello';
  }else{
    b='good bye';
  }
  $b = $a < 10 ? "Hello" : "Good Bye";
  echo $b;


  // Arrays
  $cars = array("Volvo", "BMW", "Toyota");
  echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
  echo "<br>";


  // Loop
  $size = count($cars);
  for ($i = 0; $i < $size; $i++) {
    echo $cars[$i] . "<br>";
  }


  // Associative Arrays
  $students = array("Ahmad" => "Computer Science", "Khaled" => "Data Science", "Ibrahim" => "Cyber Security");
  echo $students["Ahmad"];
  echo "<br>";
  foreach($students as $name => $major ) {
    echo "key= ". $name . ", value=" .$major;
    echo "<br>";
  }
  // print_r($students);
  

  ?>

</body>

</html>