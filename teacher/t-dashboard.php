<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .sidebar {
            width: 250px;
            background-color: #333;
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            box-sizing: border-box;
        }
        .sidebar img {
            width: 100px;
            margin-bottom: 20px;
        }
        .sidebar a {
            text-decoration: none;
            color: #fff;
            width: 100%;
            padding: 10px;
            display: flex;
            align-items: center;
            border-radius: 5px;
            margin: 5px 0;
            transition: background 0.3s;
        }
        .sidebar a:hover {
            background-color: #555;
        }
        .sidebar a i {
            margin-right: 10px;
        }
        .main-content {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
        }
        .main-content h1 {
            margin-top: 0;
        }
        .cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .card {
            background-color: #222;
            color: #fff;
            padding: 20px;
            border-radius: 10px;
            width: calc(33.333% - 20px);
            box-sizing: border-box;
            text-align: center;
        }
        .card h2 {
            margin: 10px 0;
        }
        .card p {
            margin: 5px 0;
        }
        .right-sidebar {
            width: 250px;
            background-color: #fff;
            padding: 20px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .calendar {
            margin-bottom: 20px;
        }
        .notifications {
            width: 100%;
            background-color: #333;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }
        .card img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
        @media (max-width: 768px) {
            .card {
                width: calc(50% - 20px);
            }
            .right-sidebar {
                display: none;
            }
        }
        @media (max-width: 480px) {
            .sidebar {
                width: 100px;
            }
            .sidebar a {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
            .card {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <img src="../img/bird.png" alt="Logo">
        <a href="t-dashboard.php"><i class="fa fa-tachometer"></i> Dashboard</a>
        <a href="#"><i class="fa fa-user"></i> Profile</a>
        <a href="t-student-reg.php"><i class="fa fa-users"></i> Accounts</a>
        <a href="#"><i class="fa fa-gamepad"></i> Game Stats</a>
        <a href="#"><i class="fa fa-trophy"></i> Achievements</a>
        <a href="#"><i class="fa fa-list"></i> Leaderboards</a>
        <a href="../include/signout.php"><i class="fa fa-sign-out"></i> Logout</a>
    </div>
    <div class="main-content">
        <h1>DASHBOARD</h1>
        <h2>Section</h2>
        <div class="cards">
            <div class="card">
                <img src="../img/zinc.png">
                <p>Grade 7 - Zinc</p>
            </div>
            <div class="card">
                <img src="../img/plat.png">
                <p>Grade 7 - Platinum</p>
            </div>
            <div class="card">
                <img src="../img/silver.png">
                <p>Grade 7 - Silver</p>
            </div>
            <div class="card">
               <img src="../img/manganese.png">
                <p>Grade 7 - Manganese</p>
            </div>
            <div class="card">
                <img src="../img/tungsten.png">
                <p>Grade 7 - Tungsten</p>
            </div>
        </div>
    </div>
    <div class="right-sidebar">
        <div class="calendar">
            <h2>September 2024</h2>
            <p>Calendar component goes here</p>
        </div>
        <div class="notifications">
            <p>Player 1 has finished Chapter 1</p>
        </div>
    </div>
</body>
</html>
