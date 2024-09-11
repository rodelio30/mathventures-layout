<?php
define('Amember', true);
require('../include/dbconnect.php'); // Connect to the database

if (!empty($_SESSION['user_id'])) {

    // header("location: public/index.php");
    // exit;
}
$user_name = '';
if($_GET['user'] == 'jerald') {
  $user_name = 'Jerald Marace';
}
if($_GET['user'] == 'janelle') {
  $user_name = 'Janelle Tubat';
}
if($_GET['user'] == 'mark') {
  $user_name = 'Mark Justin Laigo';
}
if($_GET['user'] == 'cyril') {
  $user_name = 'Cyril Vergara';
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
    <?php 
        // $nav_active = 'about';
        // include('nav.php');
    ?>
        <section class="cta-section-about-dev text-center">
          <!-- <img src="../img/public/back.png" alt="Back Button" class="float-start m-2 ml-0">
          <h1 class="cta-section-about-dev-head"><?=$user_name?></h1> -->
          <div class="d-flex justify-content-center align-items-center position-relative">
              <a href="about.php">
                  <img src="../img/public/back.png" alt="Back Button" width="50">
              </a>
              <h1 class="cta-section-about-dev-head text-center flex-grow-1"><?=$user_name?></h1>
          </div>
          <br> <br> 
          <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12">
                    <div class="row mt-2 meet-name">
                      <div class="col-md-3">
                        <img src="../img/about/Jerald.png" alt="Jerald" class="about-image">
                        <h3 class="mt-3">
                          JERALD MARACE
                        </h3>
                      </div>
                      <div class="col-md-3">
                        <img src="../img/about/Janelle.png" alt="Janelle" class="about-image">
                        <h3 class="mt-3">
                          JANELLE TUBAT
                        </h3>
                      </div>
                      <div class="col-md-3">
                        <img src="../img/about/Mark.png" alt="Mark" class="about-image">
                        <h3 class="mt-3">
                          MARK JUSTIN LAIGO
                        </h3>
                      </div>
                      <div class="col-md-3">
                        <img src="../img/about/Cyril.png" alt="Cyril" class="about-image">
                        <h3 class="mt-3">
                          CYRIL VERGARA
                        </h3>
                      </div>
                    <br>
                </div>
            </div>
        </div>
        </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>