<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <h1>Employees panel</h1>
    <p>Welcome to my Employees Dashboard Panel</p>

    <div class="container">
        <button class="btn btn-primary my-5"> <a href="user.php" class="text-light">Add User</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "select * from users";
                $result = mysqli_query($con, $sql); // sends the SQL query to the database server using the established connection ($con). 
                // This line is responsible for executing the SQL query against the database.
                
                if ($result) {
                  
                    // $allusers = mysqli_fetch_all($result); //fetches all rows at once, rather than one row at a time.(numeric array) >>>> 0,1,2
                    $allusers = mysqli_fetch_all($result, MYSQLI_ASSOC); //fetches all rows at once, rather than one row at a time. (associative array)  >>>> id,name,salary
                    
                    foreach ($allusers as $row) {
                        // print_r($row);

                        // (numeric array)
                        // $id = $row[0]; 
                        // $name = $row[1];
                        // $salary = $row[2];

                        // (associative array) 
                        $id = $row['id'];
                        $name = $row['name'];
                        $salary = $row['salary'];


                        // echo $name;             
                        echo ' <tr>
                            <th scope="row">' . $id . '</th>
                            <td>' . $name . '</td>
                            <td>' . $salary . '</td>
                            <td>
                            <button class="btn btn-primary"><a  class="text-light" href="updateUser.php?id=' . $id . '">Update</a></button>
                            <button class="btn btn-danger"><a class="text-light" href="deleteUser.php?id=' . $id . '">Delete</a></button>
                            </td>
                            </tr>';

                    }

                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>



<?php
// $sql = "select * from users";
// $result = mysqli_query($con, $sql); // sends the SQL query to the database server using the established connection ($con). 
// // This line is responsible for executing the SQL query against the database.

// if ($result) {
//     // iterates through each row of the result set, processing or fetching one row at a time.
//     // loop continues until mysqli_fetch_array() returns false, which happens when there are no more rows to fetch.
//     //  mysqli_fetch_array($result) returns an associative array

//     while ($row = mysqli_fetch_array($result)) {
//         $id = $row['id'];
//         $name = $row['name'];
//         $salary = $row['salary'];
//         // echo $name;             
//         echo ' <tr>
//                             <th scope="row">' . $id . '</th>
//                             <td>' . $name . '</td>
//                             <td>' . $salary . '</td>
//                             <td>
//                             <button class="btn btn-primary"><a  class="text-light" href="updateUser.php?id=' . $id . '">Update</a></button>
//                             <button class="btn btn-danger"><a class="text-light" href="deleteUser.php?id=' . $id . '">Delete</a></button>
//                             </td>
//                             </tr>';

//     }

// }
?>