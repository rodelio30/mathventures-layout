<?php
include('p-checker.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adarna Player Dashboard</title>
    <link rel="icon" type="image/x-icon" href="../img/bird.png">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Enchanted Land Font Familty -->
    <link href="https://fonts.cdnfonts.com/css/enchanted-land" rel="stylesheet">

    <!-- Bevan Font Familty -->
    <link href="https://fonts.cdnfonts.com/css/bevan" rel="stylesheet">
    
    <link href="https://fonts.cdnfonts.com/css/baloo-thambi" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-adarna" style="font-family: Baloo Thambi !important;">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?=$index_active?>" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?=$story_active?>" aria-current="page" href="../public/story.php">Story</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?=$about_active?>" aria-current="page" href="../public/about.php">About</a>
        </li>
      </ul>
      <!-- <a href="../login.php" class="d-flex btn-login">Login</a> -->
      <img src="../img/player/notif.png" alt="" class="d-flex" style="width: 20px; fill: #ff6347;">
    </div>
  </div>
</nav>
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
       <?php
        $side_nav = 'index';
        include 'include/sidebar.php';
       ?>

      <!-- Main Content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="card mt-3">
            <div class="card-body">
              <h1 class="h2 text-center">Welcome to <span style="color: #7D4B00;">Adarna</span> <span style="color: #014700;">Dashboard</span>, Player 1!</h1>
              <hr style="border: 0; border-top: 7px solid black !important; ">
            <div class="row mb-3">
                <div class="col-lg-6">
                    <h3>Teacher: Mrs. Professor</h3>
                    <br>
                    <h1>General Statistics</h1>
                    <div class="mt-3">
                        <h4>Game Progress</h4>
                        <div class="bg-progress">
                            20% Completed
                            <div class="progress  custom-progress">
                                <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h4>Quizzes Progress</h4>
                        <div class="bg-progress">
                            20% Completed
                            <div class="progress  custom-progress">
                                <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h4>Achievements</h4>
                        <div class="bg-progress">
                            20% Completed
                            <div class="progress  custom-progress">
                                <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 class="text-center">Section: Grade 7 - Zinc</h3>
                    <h3 class="mt-3 text-center">Leaderboards</h3>
                    <div class="top-players">
                        <h4 class="text-center">Top 10 Players</h4>
                        <hr>
                        <h5 class="d-flex justify-content-between align-items-center">
                            <div>
                                <img src="../img/player/top1.png" alt="Crown" class="img-fluid" style="width: 10%;">
                                <img src="../img/player/profile.png" alt="Crown" class="img-fluid" style="width: 10%;">
                                user1234 
                            </div>
                            <span class="badge rounded-pill">
                                <img src="../img/player/crown.png" alt="Crown" class="img-fluid" style="width: 70%; margin: 0;">
                            </span>
                        </h5>
                        <h5 class="d-flex justify-content-between align-items-center">
                            <div>
                                <img src="../img/player/top2.png" alt="Crown" class="img-fluid" style="width: 9%;">
                                <img src="../img/player/profile.png" alt="Crown" class="img-fluid" style="width: 9%;">
                                Cedrick Santos
                            </div>
                            <span class="badge rounded-pill"> </span>
                        </h5>
                        <h5 class="d-flex justify-content-between align-items-center">
                            <div>
                                <img src="../img/player/top3.png" alt="Crown" class="img-fluid" style="width: 9%;">
                                <img src="../img/player/profile.png" alt="Crown" class="img-fluid" style="width: 9%;">
                                Janelle Tubat
                            </div>
                            <span class="badge rounded-pill"> </span>
                        </h5>
                        <h5 class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <h4 class="ms-3 me-2 mb-0">4</h4>
                                <img src="../img/player/profile.png" alt="Crown" class="img-fluid ms-1 me-1" style="width: 9%;">
                                <span>
                                    Janelle Tubat
                                </span>
                            </div>
                        </h5>
                        <h5 class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <h4 class="ms-3 me-2 mb-0">5</h4>
                                <img src="../img/player/profile.png" alt="Crown" class="img-fluid ms-1 me-1" style="width: 9%;">
                                <span>
                                    Alecs Bernabe
                                </span>
                            </div>
                        </h5>
                        <h5 class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <h4 class="ms-3 me-2 mb-0">6</h4>
                                <img src="../img/player/profile.png" alt="Crown" class="img-fluid ms-1 me-1" style="width: 9%;">
                                <span>
                                    Nia Cañada
                                </span>
                            </div>
                        </h5>
                        <h5 class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <h4 class="ms-3 me-2 mb-0">7</h4>
                                <img src="../img/player/profile.png" alt="Crown" class="img-fluid ms-1 me-1" style="width: 9%;">
                                <span>
                                    Charlene Ablian
                                </span>
                            </div>
                        </h5>
                        <h5 class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <h4 class="ms-3 me-2 mb-0">8</h4>
                                <img src="../img/player/profile.png" alt="Crown" class="img-fluid ms-1 me-1" style="width: 9%;">
                                <span>
                                    Exequiel Mamerto
                                </span>
                            </div>
                        </h5>
                        <h5 class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <h4 class="ms-3 me-2 mb-0">9</h4>
                                <img src="../img/player/profile.png" alt="Crown" class="img-fluid ms-1 me-1" style="width: 9%;">
                                <span>
                                    Jon Randel Cortez
                                </span>
                            </div>
                        </h5>
                        <h5 class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <h4 class="ms-3 me-2 mb-0">10</h4>
                                <img src="../img/player/profile.png" alt="Crown" class="img-fluid ms-1 me-1" style="width: 9%;">
                                <span>
                                    Christian Santos
                                </span>
                            </div>
                        </h5>
                    </div>
                </div>
            </div>
            </div>
        </div>

      </main>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
