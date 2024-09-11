<?php
include('p-checker.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adarna Profile Dashboard</title>
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
        $side_nav = 'profile';
        include 'include/sidebar.php';
       ?>

      <!-- Main Content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="row">
          <div class="col-md-6 col-12">
            <br>
            <h1 class="profile-info mt-4 mb-0 pb-0">Edit Info</h1>
            <h6 class="profile-info" style="margin: 0; padding: 0;">Please remember to click 'Save' after making any changes.</h6>
          </div>
          <div class="col-md-6 col-12">
            <div class="text-center mt-4">
              <img src="../img/player/player.png" alt="Avatar" class="img-fluid rounded-circle" width="100" style="background-color: #000000 !important;
  border: 5px solid #5000B7 !important;">
            </div>

            <div class="row mt-3" style="background-color: #F6D3FF; width: 35%; margin: 0 auto;">
              <div class="col-2">
                <img src="../img/player/camera.png" alt="Camera" class="pt-2" style="height:29px;">
              </div>
              <div class="col-10">
                <h6 class="profile-info pt-2" style="color: #2F003A !important;">| &nbsp; Change Avatar</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-12">
            <label class="profile-info">First Name</label>
            <div class="input-group input-group-sm mb-3">
              <input type="text" class="form-control" placeholder="John">
            </div>

            <label class="profile-info">Middle Name</label>
            <div class="input-group input-group-sm mb-3">
              <input type="text" class="form-control" placeholder="">
            </div>

            <label class="profile-info">Last Name</label>
            <div class="input-group input-group-sm mb-3">
              <input type="text" class="form-control" placeholder="Doe">
            </div>

            <label class="profile-info">Sex</label>
            <div class="input-group input-group-sm mb-3">
              <input type="text" class="form-control" placeholder="John">
            </div>

            <label class="profile-info">Email</label>
            <div class="input-group input-group-sm mb-3">
              <input type="text" class="form-control" placeholder="johndoe@gmail.com">
            </div>

          </div>
          <div class="col-md-6 col-12">
            <label class="profile-info">Username</label>
            <span class="note">*Please note that you can only change your username once.</span>
            <div class="input-group input-group-sm mb-3">
              <input type="text" class="form-control" placeholder="Player 1">
            </div>
            <label class="profile-info">Change Password</label>
            <div class="input-group input-group-sm mb-3">
              <input type="password" class="form-control" placeholder="********">
            </div>
            <label class="profile-info">Confirm Password</label>
            <div class="input-group input-group-sm mb-3">
              <input type="password" class="form-control" placeholder="********">
            </div>
            <label class="profile-info">Enter OTP Code</label>
            <div class="input-group input-group-sm mb-3">
              <input type="text" class="form-control" placeholder="******">
              <input type="submit" class="btn btn-otp ms-2"value="Send OTP">
            </div>
          </div>
        </div>
        
        <br> <br> <br>
      </main>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
