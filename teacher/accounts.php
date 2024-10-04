<?php
include('p-checker.php');
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
                <div class="row" style="margin: 1rem; background-color: #3F0071; padding: 1rem; border-radius: 15px;">
                  <div class="col-md-2"><h3>1.</h3></div>
                  <div class="col-md-7"><h3>Student Name</h3></div>
                  <div class="col-md-3"><a href="accounts-view.php" class="btn btn-accounts-view float-end">View Progress</a></div>
                </div>
              </div>
          </div> <!-- End of Content -->
      </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>