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
                    <h2>Select Section</h2>
                    <select class="form-select" aria-label="Default select example">
                      <option value="Grade 5 Acacia" selected>Grade 5 Acacia</option>
                      <option value="Grade 5 Narra">Grade 5 Narra</option>
                      <option value="Grade 5 Yakal">Grade 5 Yakal</option>
                      <option value="Grade 5 Ipil-Ipil">Grade 5 Ipil-Ipil</option>
                    </select>
                  </div>
                  <div class="col-md-4"> </div>
                  <div class="col-md-5 pt-4">
                    <a href="#" class="btn btn-students float-end ms-3">+ Upload List</a>
                    <a href="student_list_create.php" class="btn btn-students float-end">+ Add a Student</a>
                  </div>
                </div>
               </div>
              <div class="card" style="height: 64vh; border-radius: 25px; ">
                  <div class="row" style="margin: 1rem; background-color: #3F0071; padding: 1rem; border-radius: 15px;">
                    <div class="col-md-2"><h3 class="mt-2">1.</h3></div>
                    <div class="col-md-7"><h3 class="mt-2">Student Name</h3></div>
                    <div class="col-md-3">
                      <img src="../img/teacher/delete-student.png" alt="Delete Student" class="float-end mt-1" style="cursor: pointer;" width="30" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <a href="student_list_edit.php" class="btn float-end">
                        <img src="../img/teacher/edit-student.png" alt="Edit Student" class="me-2" width="30">
                      </a>
                      <!-- <a href="student_list_edit.php" class="btn float-end">
                      </a> -->

                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content" style="background-color: #3F0071; border-radius: 25px; border: 3px solid black;">
      <div class="modal-body text-center" style="padding: 2rem;">
        <h2>Are you sure you want to remove this student?</h2>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
          <button class="btn btn-student-delete me-md-2" type="button">YES</button>
          <button class="btn btn-student-delete" type="button">NO</button>
        </div>
      </div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>