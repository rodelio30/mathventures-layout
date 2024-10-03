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
          $side_nav = 'stud_list';
        include 'include/sidebar.php';
        ?>
          <!-- Main Content (Placeholder) -->
          <div class="col-md-8 account-content pt-1">
              <!-- Your main content goes here -->
               <div class="p-4">
                  <div class="row">
                    <div class="col-md-3">
                      <a href="student_list.php" style="color: white; text-decoration: none;">
                          <h2>Back</h2>
                      </a>
                    </div>
                    <div class="col-md-6">
                      <h2 style="font-weight: bold; -webkit-text-stroke: 2px black;">
                        Create Student Account
                      </h2>
                    </div>
                    <div class="col-md-3">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <h2 class="mt-4">First Name</h2>
                      <div class="row">
                        <div class="col-md-10">
                          <div class="input-group flex-nowrap">
                            <input type="text" class="form-control" placeholder="Firstname" aria-label="Firstname" aria-describedby="addon-wrapping">
                          </div>
                        </div>
                      </div>
                      <h2>Middle Name</h2>
                      <div class="row">
                        <div class="col-md-10">
                          <div class="input-group flex-nowrap">
                            <input type="text" class="form-control" placeholder="Middlename" aria-label="MIddlename" aria-describedby="addon-wrapping">
                          </div>
                        </div>
                      </div>
                      <h2>Last Name</h2>
                      <div class="row">
                        <div class="col-md-10">
                          <div class="input-group flex-nowrap">
                            <input type="text" class="form-control" placeholder="Lastname" aria-label="Lastname" aria-describedby="addon-wrapping">
                          </div>
                        </div>
                      </div>
                      <h2>Gender</h2>
                      <div class="row">
                        <div class="col-md-10">
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
                        <div class="col-md-10">
                          <div class="input-group flex-nowrap">
                            <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="addon-wrapping">
                          </div>
                        </div>
                      </div>
                      <h2>Password</h2>
                      <div class="row">
                        <div class="col-md-10">
                          <div class="input-group flex-nowrap">
                            <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping">
                          </div>
                        </div>
                      </div>
                      </div>

                      <div class="col-md-6">
                          <div class="row mt-4">
                            <div class="col-md-3">
                              <h2 style="font-weight: bold; -webkit-text-stroke: 2px black;">
                                Section
                              </h2>
                            </div>
                            <div class="col-md-9">
                              <select class="form-select" aria-label="Default select example">
                                <option value="Grade 5 Acacia" selected>Grade 5 Acacia</option>
                                <option value="Grade 5 Narra">Grade 5 Narra</option>
                                <option value="Grade 5 Yakal">Grade 5 Yakal</option>
                                <option value="Grade 5 Ipil-Ipil">Grade 5 Ipil-Ipil</option>
                              </select>
                            </div>
                          </div>
                      </div>
                    </div>

                    <button type="button" class="btn btn-students float-end">Add a Student</button>
               </div>
          </div>
      </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>