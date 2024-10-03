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
      .profile-content {
        margin: 0 1rem 1rem;
        border-radius: 50px;
        background-image: url("../img/teacher/profile-bg.png");
        background-size: cover;
        background-position: center;
      }
      .profile-content h1 {
        -webkit-text-stroke: 1px black;
      }
      .profile-content h2 {
        -webkit-text-stroke: 1px black;
        font-weight: bold;
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
          $side_nav = 'profile';
        include 'include/sidebar.php';
        ?>
          <!-- Main Content (Placeholder) -->
          <div class="col-md-8 profile-content p-4 pt-3">
              <!-- Your main content goes here -->
               <h1>Edit Info</h1>

               <h2 class="mt-4">First Name</h2>
               <div class="row">
                <div class="col-md-6">
                  <div class="input-group flex-nowrap">
                    <input type="text" class="form-control" placeholder="Firstname" aria-label="Firstname" aria-describedby="addon-wrapping">
                  </div>
                </div>
               </div>
               <h2>Middle Name</h2>
               <div class="row">
                <div class="col-md-6">
                  <div class="input-group flex-nowrap">
                    <input type="text" class="form-control" placeholder="Middlename" aria-label="MIddlename" aria-describedby="addon-wrapping">
                  </div>
                </div>
               </div>
               <h2>Last Name</h2>
               <div class="row">
                <div class="col-md-6">
                  <div class="input-group flex-nowrap">
                    <input type="text" class="form-control" placeholder="Lastname" aria-label="Lastname" aria-describedby="addon-wrapping">
                  </div>
                </div>
               </div>
               <h2>Gender</h2>
               <div class="row">
                <div class="col-md-6">
                  <div class="input-group flex-nowrap">
                    <select class="form-select" name="gender" aria-label="Default select example">
                      <option value="Male" selected>Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>
                </div>
               </div>
               <h2>Email Address:</h2>
               <div class="row">
                <div class="col-md-6">
                  <div class="input-group flex-nowrap">
                    <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="addon-wrapping">
                  </div>
                </div>
               </div>
               <h2>Password</h2>
               <div class="row">
                <div class="col-md-6">
                  <div class="input-group flex-nowrap">
                    <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping">
                  </div>
                </div>
               </div>
               <button type="button" class="btn btn-save float-end">SAVE</button>
          </div>
      </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>