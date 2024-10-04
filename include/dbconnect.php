<?php
session_start();
date_default_timezone_set("Asia/Manila");

if(!defined('Amember')){
    header('location: ../index.php');
    die();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mathventures";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>