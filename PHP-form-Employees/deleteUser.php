<?php
include("connect.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "delete from users where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo ('your item has been deleted');
        // header('locat');
        header('Location: display.php');

    } else {
        die(mysqli_error($con));
    }
}

?>