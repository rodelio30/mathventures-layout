<?php
$index_active = "";
$about_active = "";

if($nav_active == "index") {
    $index_active = "active";
} 
if($nav_active == "about"){
    $about_active = "active";
}

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-mathventures" style="font-family: 'Poppins', sans-serif !important;">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item ps-2">
          <a href="index.php">
          <img src="../img/logo_MV.png" class="nav-link <?=$index_active?> mt-2" alt="LOGO Mathventures" width="50">
          </a>
        </li>
        <li class="nav-item ps-3">
          <a class="nav-link <?=$index_active?> p-3 fs-4" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?=$about_active?> p-3 fs-4" aria-current="page" href="about.php">About Us</a>
        </li>
      </ul>
      <!-- <form class="d-flex">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
      <?php
      if($nav_active != 'about') { ?>
        <a href="../login.php" class="d-flex btn-login">LOGIN</a>
      <?php } ?>
    </div>
  </div>
</nav>