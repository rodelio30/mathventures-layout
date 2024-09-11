<?php
define('Amember', true);
require('../include/dbconnect.php'); // Connect to the database

if (!empty($_SESSION['user_id'])) {

    header("location: public/index.php");
    exit;
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

    <title>MATHVENTURES | Homepage</title>
  </head>
  <body>
    <?php 
        $nav_active = 'index';
        include('nav.php');
    ?>
      <section class="cta-section text-left">
        <div class="container">
          <div class="cta-overlay">
              <h1 class="cta-adarna">WELCOME TO <br>MATHVENTURES</h1>
          </div>
          <div style="width: 40%;">
              <p class="cta-bot mb-4">
                Mathventure is a mobile game application covering four math subjects: Basic Operators, Algebra, Geometry, and Integers, offering problem solving and quizzes for progress.
              </p>
              <a href="../login.php" class="btn-download-now">DOWNLOAD NOW</a>
          </div>
        </div> 
      </section>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>