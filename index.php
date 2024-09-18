<?php
define('Amember', true);
require('include/dbconnect.php'); // Connect to the database

if (empty($_SESSION['user_id'])) {
    header("location: public/index.php");
    exit;
}

if ($_SESSION["login_type"] === "student") {
    header("location: user/index.php");
}

if ($_SESSION["login_type"] === "admin") {
    header("location: teacher/t-dashboard.php");
}

?>