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
        $side_nav = 'game';
        include 'include/sidebar.php';
       ?>

      <!-- Main Content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="card mt-3">
            <div class="card-body"style="padding: 0 .7rem 0;">
              <div class="row">
                <div class="col-md-7">
                    <h1 class="mt-4">Game Statistics</h1>
                    <h3>Current Save</h3>
                    <div class="card" style="background-color: #D9D9D9; border: 1px solid #D9D9D9; padding: 0 1rem; margin: 0 1rem;">
                        <div class="bg-progress">
                            <div class="row">
                              <div class="col-md-6">
                                20% Completed
                              </div>
                              <div class="col-md-6 text-end">
                                  Current chapter: 1
                              </div>
                            </div>
                            <div class="progress custom-progress mt-2">
                                <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="row mt-3">
                              <div class="col-md-6">
                                <h5>
                                Current Save File 
                                </h5>
                              </div>
                              <div class="col-md-6 text-end">
                                Date: 04/24/2024
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                Name: New Game 1
                              </div>
                              <div class="col-md-6 text-end">
                                Last Location: Piedras Platas
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5" style="background-color: #D9D9D9; border-radius: 1.54rem; height: 100%;">
                  <br> <br>
                    <div class="progress-circle text-center">
                      <svg>
                        <circle class="bg" cx="50" cy="50" r="50"></circle>
                        <circle class="progress" cx="50" cy="50" r="50"></circle>
                      </svg>
                      <img src="../img/player/player.png" alt="Profile Image">
                    </div>
                    <div class="text-center">
                    <h4 class="mt-2">Current Save</h4>
                    <span style="color: #505050;">Level 5</span>
                    <br>
                    <span style="color: #505050;">Xp <span style="color: #00C02A;">1523</span> / 1750</span>
                    <hr style="padding: 2px; color: black;">
                    <h4>
                      Class: Sahitaryo
                    </h4>
                    </div>
                  <br> <br> <br> <br>
                  <br> <br> <br> <br>
                  <br> <br> <br>
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

 <script>
    // JavaScript to update the progress circle
    document.addEventListener('DOMContentLoaded', function() {
      const progressCircle = document.querySelector('.progress-circle .progress');
      const progress = 80; // Progress percentage (0-100)

      const circumference = 2 * Math.PI * 50; // 2 * pi * radius (50)
      const offset = circumference - (progress / 100) * circumference;

      progressCircle.style.strokeDashoffset = offset;
    });
  </script>