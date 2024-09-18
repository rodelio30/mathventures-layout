<?php
define('Amember',true);
include('../include/dbconnect.php');

if ($_SESSION['login_type'] === 'admin') {
  header("Location: ../teacher/");
}

// Checker = if the user is not logged in, it will redirect to login page
if (!$_SESSION['login'] && empty($_SESSION['user_id'])) {
  header("Location: ../login.php");
}

?>