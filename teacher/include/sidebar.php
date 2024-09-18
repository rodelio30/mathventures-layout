<?php
$active_nav = '';
$index_nav = '';
$profile_nav = '';
$stud_list_nav = '';
$accounts_nav = '';
$leader_nav = '';

if($side_nav==="index"){
    $index_nav = 'active';
}
if($side_nav==="profile"){
    $profile_nav = 'active';
}
if($side_nav==="stud_list"){
    $stud_list_nav = 'active';
}
if($side_nav==="accounts"){
    $accounts_nav = 'active';
}
if($side_nav==="leader"){
    $leader_nav = 'active';
}
?>
        <!-- Sidebar -->
        <div class="col-md-3 sidebar">
            <div class="mb-5">
                <img src="../img/teacher/Ellipse 5.png" alt="Logo">
            </div>
            <a href="index.php" class="d-flex flex-column align-items-center <?= $index_nav ?>">
                <div class="icon">
                  <img src="../img/user/home.png" alt="">
                </div> <!-- Home icon -->
                HOME
            </a>
            <a href="profile.php" class="d-flex flex-column align-items-center <?= $profile_nav ?>">
                <div class="icon">
                  <img src="../img/user/profile.png" alt="">
                </div> <!-- Profile icon -->
                PROFILE
            </a>
            <a href="student_list.php" class="d-flex flex-column align-items-center <?= $stud_list_nav ?>">
                <div class="icon">
                  <img src="../img/teacher/stud_list.png" alt="">
                </div> <!-- Quiz Scores icon -->
                STUDENT LIST 
            </a>
            <a href="accounts.php" class="d-flex flex-column align-items-center <?= $accounts_nav ?>">
                <div class="icon">
                  <img src="../img/teacher/accounts.png" alt="">
                </div> <!-- Quiz Scores icon -->
                ACCOUNTS
            </a>
            <a href="leaderboards.php" class="d-flex flex-column align-items-center <?= $leader_nav ?>">
                <div class="icon">
                  <img src="../img/user/leader.png" alt="">
                </div> <!-- Leaderboard icon -->
                LEADERBOARDS
            </a>
            <div class="float-bottom">
                <img src="../img/teacher/Ellipse 6.png" alt="Bottom Logo">
            </div>
        </div>