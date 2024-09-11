<?php
include('t-checker.php');

if(isset($_GET['secID'])) {
    $student_section = $_GET['secID'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../img/bird.png">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.cdnfonts.com/css/baloo-thambi" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <script src="script.js" defer></script>
</head>
<body>
    <?php
        $topnavname = "GRADE 7 - ZINC";
        include "topnav.php";
    ?>
    <div class="content" style="overflow-y: auto !important;">
        <?php
            $nav_active = "dashboard";
            include "sidebar.php";
        ?>
        <div class="main-content bg-dashboard" style="height: 800px; margin-bottom: 1rem;">
            <div class="row">
                <div class="col-md-7">
                    <div class="sec-top">
                        <a href="index-view-section.php?secID=<?=$student_section?>">
                        <img src="../img/teacher/icons-back.png" alt="Icon Back" class="icon-back">
                        </a>
                    </div>
                </div>
                <div class="col-md-5">
                    <h2 class="progress-name">Student Name</h2>
                </div>
            </div>
            <div class="progress-top-list">
                <div class="row progress-table-head">
                    <div class="col-md-3">
                        Chapter Name
                    </div>
                    <div class="col-md-3">
                        Status
                    </div>
                    <div class="col-md-3">
                        Date
                    </div>
                    <div class="col-md-2">
                        Quiz Score
                    </div>
                </div>
            </div>
            <div class="progress-list">
                <div class="row progress-table-list">
                    <div class="col-md-3">
                        Chapter 1 
                    </div>
                    <div class="col-md-3">
                        <img src="../img/teacher/icon-status-check.png" alt="Status Check Icon" class="icon-status">
                    </div>
                    <div class="col-md-3">
                        06/07/24
                    </div>
                    <div class="col-md-2 text-center">
                        <span style="color: #2BA330;">7</span>/10
                    </div>
                </div>
                <hr class="progress-hr">
                <div class="row progress-table-list">
                    <div class="col-md-3">
                        Chapter 2 
                    </div>
                    <div class="col-md-3">
                        <img src="../img/teacher/icon-status-ex.png" alt="Status Check Icon" class="icon-status">
                    </div>
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-2 text-center">
                        -
                    </div>
                </div>
                <hr class="progress-hr">
                <div class="row progress-table-list">
                    <div class="col-md-3">
                        Chapter 3 
                    </div>
                    <div class="col-md-3">
                        <img src="../img/teacher/icon-status-ex.png" alt="Status Check Icon" class="icon-status">
                    </div>
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-2 text-center">
                        -
                    </div>
                </div>
                <hr class="progress-hr">
                <div class="row progress-table-list">
                    <div class="col-md-3">
                        Chapter 4 
                    </div>
                    <div class="col-md-3">
                        <img src="../img/teacher/icon-status-ex.png" alt="Status Check Icon" class="icon-status">
                    </div>
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-2 text-center">
                        -
                    </div>
                </div>
                <hr class="progress-hr">
                <div class="row progress-table-list">
                    <div class="col-md-3">
                        Chapter 5 
                    </div>
                    <div class="col-md-3">
                        <img src="../img/teacher/icon-status-ex.png" alt="Status Check Icon" class="icon-status">
                    </div>
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-2 text-center">
                        -
                    </div>
                </div>
                <hr class="progress-hr">
                <div class="row progress-table-list">
                    <div class="col-md-3">
                        Chapter 6 
                    </div>
                    <div class="col-md-3">
                        <img src="../img/teacher/icon-status-ex.png" alt="Status Check Icon" class="icon-status">
                    </div>
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-2 text-center">
                        -
                    </div>
                </div>
                <hr class="progress-hr">
                <div class="row progress-table-list">
                    <div class="col-md-3">
                        Chapter 7 
                    </div>
                    <div class="col-md-3">
                        <img src="../img/teacher/icon-status-ex.png" alt="Status Check Icon" class="icon-status">
                    </div>
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-2 text-center">
                        -
                    </div>
                </div>
                <hr class="progress-hr">
                <div class="row progress-table-list">
                    <div class="col-md-3">
                        Chapter 8 
                    </div>
                    <div class="col-md-3">
                        <img src="../img/teacher/icon-status-ex.png" alt="Status Check Icon" class="icon-status">
                    </div>
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-2 text-center">
                        -
                    </div>
                </div>
                <hr class="progress-hr">
                <div class="row progress-table-list">
                    <div class="col-md-3">
                        Chapter 9 
                    </div>
                    <div class="col-md-3">
                        <img src="../img/teacher/icon-status-ex.png" alt="Status Check Icon" class="icon-status">
                    </div>
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-2 text-center">
                        -
                    </div>
                </div>
                <hr class="progress-hr">
                <div class="row progress-table-list">
                    <div class="col-md-3">
                        Chapter 10 
                    </div>
                    <div class="col-md-3">
                        <img src="../img/teacher/icon-status-ex.png" alt="Status Check Icon" class="icon-status">
                    </div>
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-2 text-center">
                        -
                    </div>
                </div>
            </div>


        </div>
    </div>
</body>
</html>
