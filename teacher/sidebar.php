<?php
$dash_active = '';
$profile_active = '';
$account_active = '';
$game_active = '';
$achieve_active = '';
$leader_active = '';

if($nav_active === 'dashboard') {
    $dash_active = 'active';
}
if($nav_active === 'profile') {
    $profile_active = 'active';
}
if($nav_active === 'accounts') {
    $account_active = 'active';
}
if($nav_active === 'game') {
    $game_active = 'active';
}
if($nav_active === 'achieve') {
    $achieve_active = 'active';
}
if($nav_active === 'leader') {
    $leader_active = 'active';
}

?>
<div class="sidebar">
    <img src="../img/bird.png" alt="Logo">
    <a href="index.php" class="<?=$dash_active?>">
        <img src="../img/teacher/dash.png" alt="Dashboard Icon" class="icon">
        <span>Dashboard</span>
    </a>
    <a href="profile.php" class="<?=$profile_active?>">
        <img src="../img/teacher/profile.png" alt="Profile Icon" class="icon">
        <span>Profile</span>
    </a>
    <a href="accounts.php" class="<?=$account_active?>">
        <img src="../img/teacher/accounts.png" alt="Accounts Icon" class="icon">
        <span>Accounts</span>
    </a>
    <a href="game-stat.php" class="<?=$game_active?>">
        <img src="../img/teacher/game-stat.png" alt="Game Statistics Icon" class="icon">
        <span>Game Stats</span>
    </a>
    <a href="achievements.php" class="<?=$achieve_active?>">
        <img src="../img/teacher/achieve.png" alt="Achievements Icon" class="icon">
        <span>Achievements</span>
    </a>
    <a href="leaderboards.php" class="<?=$leader_active?>">
        <img src="../img/teacher/leaderboards.png" alt="Leaderboards Icon" class="icon">
        <span>Leaderboards</span>
    </a>
    <a href="../include/signout.php" class="logout">
        <img src="../img/teacher/logout.png" alt="Logout Icon" class="icon">
        <span>Logout</span>
    </a>
</div>