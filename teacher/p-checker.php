<?php
define('Amember',true);
include('../include/dbconnect.php');

if ($_SESSION['login_type'] === 'student') {
  header("Location: ../user/");
}

// Checker = if the user is not logged in, it will redirect to login page
if (!$_SESSION['login'] && empty($_SESSION['user_id'])) {
  header("Location: ../login.php");
}

?>