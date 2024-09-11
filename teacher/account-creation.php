<?php
include('t-checker.php');

if(isset($_POST['btnsubmit']))
{
    $lrn_number = $_POST['lrn'];
    $firstname = $_POST['fname'];
    $middlename = $_POST['mname'];
    $lastname = $_POST['lname'];
    $gender = $_POST['gender'];
    $bdate = $_POST['bdate'];
    $username = $_POST['username'];
    $password = $lastname.$bdate;
    $section = $_POST['section'];
    $usertype ="student";



    $query = "INSERT INTO users VALUES('$lrn_number','$firstname','$middlename','$lastname','$gender','$bdate','$username','$section','Active')";
    $sqli_run = mysqli_query($conn,$query);

    $query2 = "INSERT INTO accounts VALUES('$lrn_number','$firstname','$middlename','$lastname','$username','$password','$section','$usertype','Active')";
    $sqli_run2 = mysqli_query($conn,$query2);

    if($sqli_run && $sqli_run2)
    {
        echo "<script> alert('REGISTERED !')</script>";
    }
    else
    {
        echo "<script> alert('REGISTRATION FAILED!')</script>";
    }
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
        $topnavname = "ACCOUNTS";
        include "topnav.php";
    ?>
    <div class="content">
        <?php
            $nav_active = "accounts";
            include "sidebar.php";
        ?>
        <div class="main-content" style="background-color: #292929; border-radius: 1.1rem; margin-right: 2rem;">
            <div class="sec-top" style="padding: 0;">
                <a href="accounts.php">
                    <img src="../img/teacher/icons-back.png" alt="Icon Back" class="icon-back" style="margin-bottom: 0 !important;">
                </a>
            </div>
            <form action="#" method="POST">
                <div class="row account-creation">
                    <div class="col-md-6">
                        <div class="form-group">
                            <h2> LRN NUMBER: </h2>
                            <input type="text" id="lrn" name="lrn" required>
                        </div>
                        <div class="form-group">
                            <h2> First Name </h2>
                            <input type="text" id="firstname" name="fname" required>
                        </div>
                        <div class="form-group">
                            <h2> Middle Name </h2>
                            <input type="text" id="middlename" name="mname" required>
                        </div>
                        <div class="form-group">
                            <h2> Last Name </h2>
                            <input type="text" id="lastname" name="lname" required>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-5">
                                    <h2> Sex </h2>
                                    <!-- <select id="formal-select" name="formal-select"> -->
                                    <select id="formal-select" name="gender">
                                        <option value="" disabled selected>Select a Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <h2> Birthdate </h2>
                                    <input type="date" id="bdate" name="bdate" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <h2> Email Address</h2>
                            <!-- <input type="email" id="email" name="email" required> -->
                            <input type="email" id="email" name="username" required>
                        </div>
                        <button type="submit" name="btnsubmit" style="margin-top: 0.5rem;">Create</button>
                    </div>
                    <div class="col-md-6">
                        <h2> Assign Section </h2>
                            <div class="image-selector-container">
                                <select id="imageSelector" name="section">
                                    <option value="zinc" data-img="../img/zinc.png">Grade 7 - Zinc</option>
                                    <option value="platinum" data-img="../img/plat.png">Grade 7 - Platinum</option>
                                    <option value="silver" data-img="../img/silver.png">Grade 7 - Silver</option>
                                    <option value="manganese" data-img="../img/manganese.png">Grade 7 - Manganese</option>
                                    <option value="tungsten" data-img="../img/tungsten.png">Grade 7 - Tungsten</option>
                                </select>
                                <div class="image-display">
                                    <img id="displayImage" src="../img/zinc.png" alt="Selected Image" class="responsive-img">
                                </div>
                            </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
<script>
        document.getElementById('imageSelector').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            var imageUrl = selectedOption.getAttribute('data-img');
            document.getElementById('displayImage').src = imageUrl;
        });
    </script>
