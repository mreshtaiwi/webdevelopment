<?php
session_start();
if (isset($_SESSION['username']) and isset($_SESSION['id'])) {
    unset($_SESSION['username']);
    unset($_SESSION['id']);
}
print_r($_SESSION);

session_destroy();
header("Location: student.php");
