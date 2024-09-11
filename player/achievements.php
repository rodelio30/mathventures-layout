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
    <link href="https://fonts.cdnfonts.com/css/baloo-thambi-2" rel="stylesheet">

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
        $side_nav = 'achieve';
        include 'include/sidebar.php';
       ?>

      <!-- Main Content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="card mt-3">
            <div class="card-body">

            <div class="row">
              <div class="col-md-6">
                    <div class="card card-achieve">
                        <div class="bg-progress">
                            <div class="row">
                              <div class="col-md-2">
                                <img src="../img/player/tropy.png" alt="Tropy" height="80">
                              </div>
                              <div class="col-md-10 text-center">
                                <h4>
                                  Panalo Na To!
                                </h4>
                                <p class="desc-achieve">Makaligtas na may hindi bababa sa 1% HP</p>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-achieve mt-3">
                        <div class="bg-progress">
                            <div class="row">
                              <div class="col-md-2">
                                <img src="../img/player/tropy.png" alt="Tropy" height="80">
                              </div>
                              <div class="col-md-10 text-center">
                                <h4>
                                  Walang Sinasanto
                                </h4>
                                <p class="desc-achieve">
                                  Patayin ang mga kalaban nang hindi nasasaktan.
                                </p>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-achieve mt-3">
                        <div class="bg-progress">
                            <div class="row">
                              <div class="col-md-2">
                                <img src="../img/player/tropy.png" alt="Tropy" height="80">
                              </div>
                              <div class="col-md-10 text-center">
                                <h4>
                                  Ikulong ang Adarna
                                </h4>
                                <p class="desc-achieve">
                                  Nahuli na ang Ibong Adarna, pwede na itinola
                                </p>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-achieve mt-3">
                        <div class="bg-progress">
                            <div class="row">
                              <div class="col-md-2">
                                <img src="../img/player/tropy.png" alt="Tropy" height="80">
                              </div>
                              <div class="col-md-10 text-center">
                                <h4>
                                </h4>
                                <p class="desc-achieve">
                                </p>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-achieve mt-3">
                        <div class="bg-progress">
                            <div class="row">
                              <div class="col-md-2">
                                <img src="../img/player/tropy.png" alt="Tropy" height="80">
                              </div>
                              <div class="col-md-10 text-center">
                                <h4>
                                </h4>
                                <p class="desc-achieve">
                                </p>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-achieve mt-3">
                        <div class="bg-progress">
                            <div class="row">
                              <div class="col-md-2">
                                <img src="../img/player/tropy.png" alt="Tropy" height="80">
                              </div>
                              <div class="col-md-10 text-center">
                                <h4>
                                </h4>
                                <p class="desc-achieve">
                                </p>
                              </div>
                            </div>
                        </div>
                    </div>
              </div>
              <div class="col-md-6">
                    <div class="card card-achieve">
                        <div class="bg-progress">
                            <div class="row">
                              <div class="col-md-2">
                                <img src="../img/player/tropy.png" alt="Tropy" height="80">
                              </div>
                              <div class="col-md-10 text-center">
                                <h4>
                                </h4>
                                <p class="desc-achieve">
                                </p>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-achieve mt-3">
                        <div class="bg-progress">
                            <div class="row">
                              <div class="col-md-2">
                                <img src="../img/player/tropy.png" alt="Tropy" height="80">
                              </div>
                              <div class="col-md-10 text-center">
                                <h4>
                                </h4>
                                <p class="desc-achieve">
                                </p>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-achieve mt-3">
                        <div class="bg-progress">
                            <div class="row">
                              <div class="col-md-2">
                                <img src="../img/player/tropy.png" alt="Tropy" height="80">
                              </div>
                              <div class="col-md-10 text-center">
                                <h4>
                                </h4>
                                <p class="desc-achieve">
                                </p>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-achieve mt-3">
                        <div class="bg-progress">
                            <div class="row">
                              <div class="col-md-2">
                                <img src="../img/player/tropy.png" alt="Tropy" height="80">
                              </div>
                              <div class="col-md-10 text-center">
                                <h4>
                                </h4>
                                <p class="desc-achieve">
                                </p>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-achieve mt-3">
                        <div class="bg-progress">
                            <div class="row">
                              <div class="col-md-2">
                                <img src="../img/player/tropy.png" alt="Tropy" height="80">
                              </div>
                              <div class="col-md-10 text-center">
                                <h4>
                                </h4>
                                <p class="desc-achieve">
                                </p>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-achieve mt-3">
                        <div class="bg-progress">
                            <div class="row">
                              <div class="col-md-2">
                                <img src="../img/player/tropy.png" alt="Tropy" height="80">
                              </div>
                              <div class="col-md-10 text-center">
                                <h4>
                                </h4>
                                <p class="desc-achieve">
                                </p>
                              </div>
                            </div>
                        </div>
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
