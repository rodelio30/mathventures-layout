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
          $side_nav = 'profile';
        include 'include/sidebar.php';
        ?>
          <!-- Main Content (Placeholder) -->
          <div class="col-md-8 profile-content">
            <span class="profile-header">View Information</span>
            <div class="row">
              <div class="col-md-6">
              <h1>
                First Name:
                <ul>
                  <li class="ms-4 m-2">
                    First Name
                  </li>
                </ul>
              </h1>
              <h1>
                Middle Name: 
                <ul>
                  <li class="ms-4 m-2">
                    Middle Name
                  </li>
                </ul>
              </h1>
              <h1>
              Last Name:
                <ul>
                  <li class="ms-4 m-2">
                    Last name
                  </li>
                </ul>
              </h1>
              <h1>
                Gender:
                <ul>
                  <li class="ms-4 m-2">
                    Gender
                  </li>
                </ul>
              </h1>
              <h1>
                Email Address:
                <ul>
                  <li class="ms-4 m-2">
                    sample@gmail.com
                  </li>
                </ul>
              </h1>
                </div>
                <div class="col-md-6">
              <h1>
              Password:
                <ul>
                  <li class="ms-4 m-2">
                  password1234
                  </li>
                </ul>
              </h1>
              <h1>
              Section:
                <ul>
                  <li class="ms-4 m-2">
                  Grade 5 Acacia
                  </li>
                </ul>
              </h1>
            
              </div>
            </div>
          </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>