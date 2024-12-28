<?php
include 'connect.php';

$id = $_GET["id"];
$details = "select * from users where id=$id";
$empDetails = mysqli_query($con,$details);
$empDetails = mysqli_fetch_assoc($empDetails); //fetches one row at a time
$name = $empDetails['name'];
$salary = $empDetails['salary'];

if (isset($_POST['updateEmp'])) {
// if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $salary = $_POST['salary'];

    echo'$name';

    $sql = "update users set name='$name',salary='$salary' where id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "data inserted successfully";
        header('Location: display.php');
        exit();
    } else {
        echo "data inserted failure";
        die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Employees</title>
</head>

<body>
<button class="btn btn-primary my-5"> <a href="display.php" class="text-light">All Users</a></button>

    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label>Employee Name</label>
                <input type="text" class="form-control" name="name" value=<?php echo $name ?>>
            </div>
            <div class="mb-3">
                <label>Salary</label>
                <input type="text" class="form-control" name="salary" value=<?php echo $salary ?>>
            </div>
            <button type="submit" class="btn btn-primary" name="updateEmp">Update Employee</button>
        </form>
    </div>
</body>

</html>