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
          $side_nav = 'quiz';
        include 'include/sidebar.php';
        ?>
          <!-- Main Content (Placeholder) -->
          <div class="col-md-8">
            <h1>Records</h1>
            <!-- <img src="../img/user/quiz-bg.png" alt="QUIZ SCORE BG" style="width: 100%;"> -->
             <!-- Quiz Record Container -->
      <div class="quiz-container">
          <!-- Background Image -->
          <img src="../img/user/quiz-bg.png" alt="QUIZ SCORE BG" class="quiz-bg">

          <!-- Overlaying Text (Header + Record) -->
          <div class="overlay-text">
              <!-- Table Header -->
              <div class="table-header">
                  <div>Quiz No.</div>
                  <div>Topic</div>
                  <div>Chapter</div>
                  <div>Score</div>
                  <div>Grade</div>
              </div>

              <!-- Quiz Record -->
              <div class="quiz-record">
                  <div class="quiz-number">1.</div>
                  <div class="topic">The Forest of Basic Operators</div>
                  <div class="chapter">Chapter 1</div>
                  <div class="score">5/10</div>
                  <div class="grade">B</div>
              </div>
          </div>
      </div>
          </div>
      </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>