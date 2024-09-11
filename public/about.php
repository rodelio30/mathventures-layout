<?php
define('Amember', true);
require('../include/dbconnect.php'); // Connect to the database

if (!empty($_SESSION['user_id'])) {

    // header("location: public/index.php");
    // exit;
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
        $nav_active = 'about';
        include('nav.php');
    ?>
        <section class="cta-section-about text-center">
          <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12">
                    <h1 class="meet-developers text-center"><b>MEET THE <span style="color:#03D388;">DEVELOPERS</span></b></h1>
                    <br>
                    <div class="row mt-2 meet-name">
                      <div class="col-md-3">
                        <a href="about_developer.php?user=jerald">
                          <img src="../img/about/Jerald.png" alt="Jerald" class="about-image">
                          <h3 class="mt-3">
                            JERALD MARACE
                          </h3>
                        </a>
                      </div>
                      <div class="col-md-3">
                        <a href="about_developer.php?user=janelle">
                          <img src="../img/about/Janelle.png" alt="Janelle" class="about-image">
                          <h3 class="mt-3">
                            JANELLE TUBAT
                          </h3>
                        </a>
                      </div>
                      <div class="col-md-3">
                        <a href="about_developer.php?user=mark">
                          <img src="../img/about/Mark.png" alt="Mark" class="about-image">
                          <h3 class="mt-3">
                            MARK JUSTIN LAIGO
                          </h3>
                        </a>
                      </div>
                      <div class="col-md-3">
                        <a href="about_developer.php?user=cyril">
                          <img src="../img/about/Cyril.png" alt="Cyril" class="about-image">
                          <h3 class="mt-3">
                            CYRIL VERGARA
                          </h3>
                        </a>
                      </div>
                    <br>
                </div>
            </div>
        </div>
        </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>