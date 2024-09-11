<?php
define('Amember', true);
require('../include/dbconnect.php'); // Connect to the database

if (!empty($_SESSION['user_id'])) {

    // header("location: public/index.php");
    // exit;
}
$user_name    = '';
$user_age     =  '';
$user_role    =  '';
$user_contact =  '';
$user_gmail   =  '';
$user_img     =  '';
if($_GET['user'] == 'jerald') {
  $user_img     =  'Jerald';
  $user_name    =  'Jerald Marace';
  $user_age     =  '22';
  $user_role    =  'Back-End Developer';
  $user_contact =  '09297656763';
  $user_gmail   =  'jeraldmarace12@gmail.com';
}
if($_GET['user'] == 'janelle') {
  $user_img     =  'Janelle';
  $user_name    =  'Janelle Tubat';
  $user_age     =  '22';
  $user_role    =  'SCRIPT WRITER';
  $user_contact =  '09123456789';
  $user_gmail   =  'JANELLETUBAT6@GMAIL.COM';
}
if($_GET['user'] == 'mark') {
  $user_img     =  'Mark';
  $user_name    =  'Mark Justin Laigo';
  $user_age     =  '21';
  $user_role    =  'Front-End Developer';
  $user_contact =  '09762407566';
  $user_gmail   =  'Markjustinlaigo12@gmail.com';
}
if($_GET['user'] == 'cyril') {
  $user_img     =  'Cyril';
  $user_name    =  'Cyril Vergara';
  $user_age     =  '21';
  $user_role    =  'Documentation';
  $user_contact =  '09665311048';
  $user_gmail   =  'cyrilvergara601@gmail.com';
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="../img/logo_MV.png">

    <title>ADARNA | About</title>
  </head>
  <body>
      <section class="cta-section-about-dev">
              <a href="about.php" class="mt-4 ms-3"style="float: left;">
                  <img src="../img/public/back.png" alt="Back Button" width="50">
              </a>
              <h1 class="cta-section-about-dev-head text-center"><?=$user_name?></h1>
          <br> <br> 
          <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="../img/about/<?= $user_img ?>.png" alt="Jerald" class="about-image-dev">
                </div>
                <div class="col-md-8 pt-4">
                  <h2>AGE: <?= $user_age ?></h2>
                  <h2 style="margin-left: 2rem;">ROLE: <?= $user_role ?></h2>
                  <h2 style="margin-left: 4rem;">CONTACT: <?= $user_contact ?></h2>
                  <h2 style="margin-left: 6rem;">GMAIL: <?= $user_gmail ?></h2>
                </div>
            </div>
        </div>
      </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>