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
    <script src="../js/script.js" defer></script>

    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="../img/logo_MV.png">

    <title>MATHVENTURES | Homepage</title>
    <style>
        .section-list {
            border-radius: 10px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .section-list .section-item {
            display: flex;
            align-items: center;
            padding-top: 1rem;
            color: black;
        }

.today-classes {
    border-radius: 20px;
    padding: 20px 2px 0;
    color: black;
    font-family: 'Poppins', sans-serif;
}

.today-classes .card-header h3 {
    text-align: center;
    font-weight: bold;
    font-size: 24px;
    letter-spacing: 2px;
}

.today-classes .class-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
    background-color: white;
    border-radius: 20px;
    margin-bottom: 15px;
}

.today-classes .class-item .class-info {
    display: flex;
    align-items: center;
}

.today-classes .class-label {
    width: 10px;
    height: 50px;
    display: inline-block;
    margin-right: 10px;
    border-radius: 5px;
}

.red {
    background-color: #d63333;
}

.blue {
    background-color: #236aff;
}

.green {
    background-color: #30b341;
}

.active-today {
  background-color: pink !important;
}
.today-classes .class-name {
    font-weight: bold;
    font-size: 16px;
    color: black;
}

.today-classes .class-time {
    font-weight: bold;
    color: #000;
    font-size: 16px;
}

/* .today-classes .class-item .class-name, .today-classes .class-item .class-time {
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4);
} */

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
          $side_nav = 'index';
        include 'include/sidebar.php';
        ?>
        <!-- Main Content (Placeholder) -->
          <div class="col-md-8 ps-4">
            <div class="row">
              <div class="col-md-8">
                <img src="../img/teacher/dashboard.png" alt="Homepage Chapter 1" style="width: 100%;">

                <h1 class="mt-2">Section</h1>
                  <div class="card p-3 pt-2">
                    <div class="row">
                      <div class="col-md-6">
                          <div class="section-list">
                              <div class="section-item">
                                  <img src="../img/teacher/acacia.png" alt="Player" width="40" height="40" class="me-3">
                                    <h3>
                                      Grade 5 Acacia
                                    </h3>
                              </div>
                          </div>
                          <div class="section-list">
                              <div class="section-item">
                                  <img src="../img/teacher/narra.png" alt="Player" width="40" height="40" class="me-3">
                                    <h3>
                                      Grade 5 Narra
                                    </h3>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="section-list">
                              <div class="section-item">
                                  <img src="../img/teacher/yakal.png" alt="Player" width="40" height="40" class="me-3">
                                    <h3>
                                      Grade 5 Yakal
                                    </h3>
                              </div>
                          </div>
                          <div class="section-list">
                              <div class="section-item">
                                  <img src="../img/teacher/ipil.png" alt="Player" width="40" height="40" class="me-3">
                                    <h3>
                                      Grade 5 Ipil-Ipil
                                    </h3>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>

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
                  <div class="card mt-3 today-classes">
                    <div class="card-header" style="background-color: transparent !important;">
                        <h3>Today Classes</h3>
                    </div>
                    <div>
                        <div class="class-item mt-2 active-today">
                            <div class="class-info">
                                <span class="class-label red"></span>
                                <span class="class-name">GRADE 5 ACACIA</span>
                            </div>
                            <div class="class-time">7:00AM - 8:00AM</div>
                        </div>
                        <div class="class-item">
                            <div class="class-info">
                                <span class="class-label blue"></span>
                                <span class="class-name">GRADE 5 NARRA</span>
                            </div>
                            <div class="class-time">8:00AM - 9:00AM</div>
                        </div>
                        <div class="class-item">
                            <div class="class-info">
                                <span class="class-label green"></span>
                                <span class="class-name">GRADE 5 YAKAL</span>
                            </div>
                            <div class="class-time">9:00AM - 10:00AM</div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="row">
              <div class="col-md-8">
              </div>
              <div class="col-md-4">
                  <!-- <div class="card" style="color: black;">
                    <h4 class="text-center mt-3" style="margin: 0;">TODAY CLASSES</h4>
                    <hr>
                  </div> -->
              </div>
            </div>
          </div>
      </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>