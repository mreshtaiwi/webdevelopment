<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Superglobal</title>
</head>

<body>

    <?php
    // PHP Superglobal
    $name = "ahmad";
    $school = "HTU";
    function sayHello()
    {
        // echo " <h2> Hello " . $name . "</h2>";
        // echo " <h2> your study at " . $school . "</h2>";
        // will be getting error so we have to add GLOBALS as below
    
        echo " <h2> Hello " . $GLOBALS['name'] . "</h2>";
        echo " <h2> your study at " . $GLOBALS['school'] . "</h2>";
    }
    sayHello();

    // another example
    $x1 = 75;
    $y1 = 25;
    function addition()
    {
        $GLOBALS['z1'] = $GLOBALS['x1'] + $GLOBALS['y1'];
    }
    addition();
    echo $z1;


    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];

    ?>

</body>

</html>