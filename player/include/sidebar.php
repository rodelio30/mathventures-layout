<?php
$active_nav = '';
$index_nav = '';
$profile_nav = '';
$game_nav = '';
$achieve_nav = '';
$leader_nav = '';

if($side_nav==="index"){
    $index_nav = 'active';
}
if($side_nav==="profile"){
    $profile_nav = 'active';
}
if($side_nav==="game"){
    $game_nav = 'active';
}
if($side_nav==="achieve"){
    $achieve_nav = 'active';
}
if($side_nav==="leader"){
    $leader_nav = 'active';
}
?>
      <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-player">
        <div class="d-flex flex-column position-sticky">
          <div class="text-center py-4">
            <img src="../img/player/player.png" alt="Avatar" class="img-fluid rounded-circle" width="100" style="background-color: #000000 !important;
  border: 5px solid #5000B7 !important;">
            <h4 style="color: white; font-family: 'Baloo Thambi', cursive;">Player 1</h4>
          </div>
          <ul class="nav flex-column left-dashboard">
            <li class="nav-item">
              <a class="nav-link <?=$index_nav?>" href="index.php">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?=$profile_nav?>" href="profile.php">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?=$game_nav?>" href="game-stat.php">Game Stats</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?=$achieve_nav?>" href="achievements.php">Achievements</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?=$leader_nav?>" href="leaderboards.php">Leaderboards</a>
            </li>
          </ul>
          <div class="text-center mt-auto mb-4">
            <img src="../img/player/logout.png" alt="Logout icon" style="width: 20%;">
            <a href="../include/signout.php" class="logout-button text-danger">Log out</a>
          </div>
        </div>
      </nav>