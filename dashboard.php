<?php
include("config.php");
include("firebaseRDB.php");
if(!isset($_SESSION['user'])){
    header("location: login.php");
} else {
    $username = $_SESSION['user']['name'];

}
?>

<h1>Hello World!</h1>
<h3>Welcome! <?=$username?></h3>
<a href="signout.php">Logout?</a>