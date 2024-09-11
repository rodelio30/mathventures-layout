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
        $topnavname = "ACCOUNTS";
        include "topnav.php";
    ?>
    <div class="content">
        <?php
            $nav_active = "accounts";
            include "sidebar.php";
        ?>
        <div class="main-content" style="background-color: #292929; border-radius: 1.1rem; margin-right: 2rem;">
                <div class="row mt-3">
                    <div class="col-md-2">
                        <div class="form-group">
                            <select id="formal-select" name="formal-select">
                                <option value="" disabled selected>Select a Section</option>
                                <option value="option1">Zinc</option>
                                <option value="option2">Platinum</option>
                                <option value="option3">Silver</option>
                                <option value="option3">Manganese</option>
                                <option value="option3">Tungsten</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5"></div> <!-- Empty space to push buttons to the right -->
                    <div class="col-md-4 d-flex justify-content-end">
                        <a href="account-creation.php" class="accounts-btn me-2">Create Student Account</a>
                        <a href="accounts.php" class="accounts-btn archive-btn">View Student Created</a>
                    </div>
                </div>
        <div class="account-item">
            <div class="account-info">
                <div class="account-index">1</div>
                <div class="account-avatar">
                    <img src="../img/teacher/icon-female.png" alt="Avatar"class="student-girl-icon">
                </div>
                <div class="account-name">Student Name</div>
            </div>
            <div class="account-actions">
                <a href="account-edit.php" class="btn edit-btn">Edit</a>
                <button class="btn remove-btn">Remove</button>
            </div>
        </div>
        </div>
    </div>
</body>
</html>
