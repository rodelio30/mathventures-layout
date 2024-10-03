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
    <style>
      .account-content {
        margin: 0 1rem 1rem;
        border-radius: 50px;
        background-image: url("../img/teacher/accounts-bg.png");
        background-size: cover;
        background-position: center;
      }
    </style>
  </head>
  <body>
    <?php 
        $nav_active = 'index';
        include('include/nav.php');
        // include('include/sidebar.php');
    ?>
   <div class="container-fluid">
      <div class="row">
        <?php
          $side_nav = 'accounts';
        include 'include/sidebar.php';
        ?>
          <!-- Main Content (Placeholder) -->
          <div class="col-md-8 account-content p-4 pt-3">
              <!-- Your main content goes here -->
              <h2>Select Section</h2>
              <select class="form-select" aria-label="Default select example" style="width: 25%;">
                <option value="Grade 5 Acacia" selected>Grade 5 Acacia</option>
                <option value="Grade 5 Narra">Grade 5 Narra</option>
                <option value="Grade 5 Yakal">Grade 5 Yakal</option>
                <option value="Grade 5 Ipil-Ipil">Grade 5 Ipil-Ipil</option>
              </select>
              <div class="card" style="height: 50vh;  border-radius: 25px; margin: 1rem 0;">
                <div class="quiz-container">
                        <!-- Table Header -->
                        <div class="table-header">
                            <div>Quiz No.</div>
                            <div>Topic</div>
                            <div>Chapter</div>
                            <div>Score</div>
                            <div>Grade</div>
                        </div>

                        <!-- Quiz Record -->
                        <div class="quiz-record m-3 mt-0 mb-2">
                            <div class="quiz-number">1.</div>
                            <div class="topic">The Forest of Basic Operators</div>
                            <div class="chapter">Chapter 1</div>
                            <div class="score">5/10</div>
                            <div class="grade">B</div>
                        </div>
                </div>
              </div>
          </div> <!-- End of Content -->
      </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>