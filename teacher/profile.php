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
        $topnavname = "PROFILE";
        include "topnav.php";
    ?>
    <div class="content">
        <?php
            $nav_active = "profile";
            include "sidebar.php";
        ?>
        <div class="main-content">
            <h1 style="margin:0; padding: 0;">Edit Info</h1>
            <p style="margin:0; padding: 0;">Please remember to click 'Save' after making any changes.</p>

            <img src="../img/teacher/icon-female.png" alt="Profile" class="profile-picture">

            <div class="change-picture-button">
                <div class="icon">
                    <img src="../img/player/camera.png" alt="Camera Icon">
                </div>
                <div class="text">
                    Change Picture
                </div>
            </div>
            <div class="row profile-form">
                <div class="col-md-6">
                    <div class="form-group">
                        <h3> 
                            First Name
                        </h3>
                        <input type="text" id="middlename" name="middlename" required>
                    </div>
                    <div class="form-group">
                        <h3> 
                            Middle Name
                        </h3>
                        <input type="text" id="middlename" name="middlename" required>
                    </div>
                    <div class="form-group">
                        <h3> 
                            Last Name
                        </h3>
                        <input type="text" id="middlename" name="middlename" required>
                    </div>
                    <div class="form-group">
                        <h3> 
                            Sex
                        </h3>
                        <select id="formal-select" name="formal-select">
                            <option value="" disabled selected>Select a Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <h3> 
                            Email Address
                        </h3>
                        <input type="text" id="middlename" name="middlename" required>
                    </div>
                    <a href="#" class="outline-btn">Cancel</a>
                    <a href="#" class="profile-btn">Save</a>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <h3> 
                            User Name
                        </h3>
                        <small>*Please note that you can only change your <span style="color: #FF0000;">username</span> once.</small>
                        <input type="text" id="middlename" name="middlename" required>
                    </div>
                    <div class="form-group">
                        <h3> 
                            Change Password
                        </h3>
                        <input type="password" id="middlename" name="middlename" required>
                    </div>
                    <div class="form-group">
                        <h3> 
                            Confirm Password
                        </h3>
                        <input type="password" id="middlename" name="middlename" required>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
