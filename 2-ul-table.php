<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dynamic table </title>
</head>

<body>
  <?php

  // ul
  $courses = array('programming', 'advanced programming', 'data structures');
  echo "<h3> your courses: </h3> ";
  echo "<ul>";
  for ($i = 0; $i < count($courses); $i++) {
    echo "<li>   $courses[$i] </li>";
  }
  echo "</ul>";


  // TABLES
  $grades = array("khaled" => 80, "Saif" => 100, "raha" => 98);
  #echo $grades["khaled"];
  #echo "<br/>";
  #foreach($grades as $name=>$grade){
  # echo "</br> $name and his grade $grade";
  #}

  echo "</br>";
  echo "</br>";
  echo "<table border=1>";
  echo "<tr> <th> Name </th> <th> grade </th> </tr>";

  foreach ($grades as $student => $grade) {
    echo "<tr> <td> $student </td> <td> $grade </td></tr>";
  }

  echo "</table>";
  ?>

</body>

</html>