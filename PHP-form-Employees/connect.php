<!-- first show to the student the final demo
 then create new project in htdocs
 then go and create new database and import the attached employees.sql file -->
<?php
$con= new mysqli('localhost','root','','employees3');

if($con) {
    echo "success connection";
} else {
    die(mysqli_error($con));
}
?>

