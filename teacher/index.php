<?php
include('t-checker.php');
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
        $topnavname = "DASHBOARD";
        include "topnav.php";
    ?>
    <div class="content">
        <?php
            $nav_active = "dashboard";
            include "sidebar.php";
        ?>
        <div class="main-content">
            <div class="sec-top">
                Section
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="cards">
                        <div class="card">
                            <a href="index-view-section.php?secID=zinc">
                                <img src="../img/zinc.png">
                                <p>Grade 7 - Zinc</p>
                            </a>
                        </div>
                        <div class="card">
                            <a href="index-view-section.php?secID=platinum">
                                <img src="../img/plat.png">
                                <p>Grade 7 - Platinum</p>
                            </a>
                        </div>
                        <div class="card">
                            <a href="index-view-section.php?secID=silver">
                                <img src="../img/silver.png">
                                <p>Grade 7 - Silver</p>
                            </a>
                        </div>
                        <div class="card">
                            <a href="index-view-section.php?secID=manganese">
                                <img src="../img/manganese.png">
                                <p>Grade 7 - Manganese</p>
                            </a>
                        </div>
                        <div class="card">
                            <a href="index-view-section.php?secID=tungsten">
                                <img src="../img/tungsten.png">
                                <p>Grade 7 - Tungsten</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="right-dash">
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
                        <div class="notifications">
                            <h3>Notifications</h3>
                            <div class="inline-content">
    <img src="../img/teacher/book.png" alt="">
    <p>Player 1 has finished Chapter 1</p>
</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
