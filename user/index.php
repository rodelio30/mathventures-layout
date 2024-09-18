<?php
// define('Amember', true);
// require('../include/dbconnect.php'); // Connect to the database

// if (!empty($_SESSION['user_id'])) {
//     header("location: public/index.php");
//     exit;
// }
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

    <link href="styles.css" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <script src="script.js" defer></script>

    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="../img/logo_MV.png">

    <title>MATHVENTURES | Homepage</title>
  </head>
  <body>
    <?php 
        include('include/nav.php');
        // include('include/sidebar.php');
    ?>
   <div class="container-fluid">
      <div class="row">
        <?php
          $side_nav = 'index';
          include 'include/sidebar.php';
        ?>
          <!-- Main Content (Placeholder) -->
          <div class="col-md-8 ps-4">
            <div class="row">
              <div class="col-md-8">
                <h1 class="fw-bold">WELCOME STUDENTS</h1>
                <img src="../img/user/home-chapter1.png" alt="Homepage Chapter 1" style="width: 100%;">
              </div>
              <div class="col-md-4">
                <div class="wrapper">
                    <header>
                        <p class="current-date"></p>
                        <div class="icons">
                        <span id="prev" class="material-symbols-rounded">chevron_left</span>
                        <span id="next" class="material-symbols-rounded">chevron_right</span>
                        </div>
                    </header>
                    <div class="calendar">
                        <ul class="weeks">
                        <li>Sun</li>
                        <li>Mon</li>
                        <li>Tue</li>
                        <li>Wed</li>
                        <li>Thu</li>
                        <li>Fri</li>
                        <li>Sat</li>
                        </ul>
                        <ul class="days"></ul>
                    </div>
                  </div>
                  <div class="card card-week">
                    <span class="text-center">
                      SCHEDULE
                    </span>
                    <div class="wrapper card-week-inside">
                        SEPTEMBER 2024
                    </div>
                  </div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-md-4">
                <img src="../img/user/chapter2.png" alt="" style="width: 90%;">
              </div>
              <div class="col-md-4">
                <img src="../img/user/chapter3.png" alt="" style="width: 90%;">
              </div>
              <div class="col-md-4">
                <img src="../img/user/chapter4.png" alt="" style="width: 90%;">
              </div>
            </div>
          </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>