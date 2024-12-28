<?php
include 'connect.php';

if (isset($_POST['submit2'])) {
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $salary = $_POST['salary'];

    echo'$name';

    $sql = "insert into users (name,salary) values ('$name','$salary')";
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
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label>Salary</label>
                <input type="text" class="form-control" name="salary">
            </div>
            <button type="submit" name="submit2" class="btn btn-primary">Add Employee</a></button>
            <!-- <button type="submit" class="btn btn-primary"><a href="user.php" class="text-light">Add Employee</a></button> -->
        </form>
    </div>
</body>

</html>