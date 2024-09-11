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

    <link href="https://db.onlinewebfonts.com/c/0f9c349da923afea31fae4db7b8094f0?family=Gotham+Black" rel="stylesheet">

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
        $side_nav = 'leader';
        include 'include/sidebar.php';
       ?>

      <!-- Main Content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="card mt-3 card-leader">
            <div class="card-body">
              <h1 class="leader-top">GRADE 7 - Zinc</h1>
              <div class="row">
                <div class="col-md-4">
                  <div class="text-center">
                    <img src="../img/leaders/raiden.jfif" alt="Top 2" class="rounded-circle top-2">
                    <h4 class="top-1-desc mt-2">Player 2 <br> 1805 Points</h4>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="text-center">
                    <img src="../img/leaders/god.png" alt="Top 1" class="rounded-circle top-1">
                    <h4 class="top-1-desc mt-2">Player 1 <br> 2055 Points</h4>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="text-center">
                    <img src="../img/leaders/third.jfif" alt="Top 3" class="rounded-circle top-2">
                    <h4 class="top-1-desc mt-2">Player 3 <br> 1790 Points</h4>
                  </div>
                </div>
              </div>
              <br>
              <div class="top-4">
                <div class="row">
                  <div class="col-md-1 text-center">
                    <h2 class="mt-1">4</h2>
                  </div>
                  <div class="col-md-5 text-end">
                    <div class="player-info">
                      <img src="../img/leaders/top4.png" alt="Top 4" class="rounded-circle player-image">
                      <span class="player-name">Player 4</span>
                    </div>
                  </div>
                  <div class="col-md-4 text-end">
                    <h2 class="mt-1">
                        1550 Points
                      </h2>
                  </div>
                  <div class="col-md-2 text-center">
                    <h2 class="mt-2">
                      ^
                    </h2>
                  </div>
                </div>

              </div>
              <div class="top-4 mt-4">
                <div class="row">
                  <div class="col-md-1 text-center">
                    <h2 class="mt-1">5</h2>
                  </div>
                  <div class="col-md-5 text-end">
                    <div class="player-info">
                      <img src="../img/leaders/female.png" alt="Top 4" class="rounded-circle player-image">
                      <span class="player-name">Player 5</span>
                    </div>
                  </div>
                  <div class="col-md-4 text-end">
                    <h2 class="mt-1">
                        1509 Points
                      </h2>
                  </div>
                  <div class="col-md-2 text-center">
                    <h2 class="mt-2">
                      ^
                    </h2>
                  </div>
                </div>

              </div>
              <div class="top-4 mt-4">
                <div class="row">
                  <div class="col-md-1 text-center">
                    <h2 class="mt-1">6</h2>
                  </div>
                  <div class="col-md-5 text-end">
                    <div class="player-info">
                      <img src="../img/leaders/female.png" alt="Top 4" class="rounded-circle player-image">
                      <span class="player-name">Player 6</span>
                    </div>
                  </div>
                  <div class="col-md-4 text-end">
                    <h2 class="mt-1">
                        1495 Points
                      </h2>
                  </div>
                  <div class="col-md-2 text-center">
                    <h2 class="mt-2">
                      ^
                    </h2>
                  </div>
                </div>

              </div>
              <br> <br>
            </div>
        </div>

      </main>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
