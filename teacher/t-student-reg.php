<?php
include('t-checker.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Creation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #333;
            color: white;
            width: 800px;
            display: flex;
            border-radius: 10px;
            overflow: hidden;
        }
        .sidebar {
            width: 200px;
            background-color: #222;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .sidebar img {
            width: 100px;
            height: auto;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            margin: 10px 0;
            text-align: center;
        }
        .main-content {
            padding: 20px;
            flex-grow: 1;
        }
        .main-content h1 {
            margin-top: 0;
        }
        .main-content form {
            display: flex;
            flex-direction: column;
        }
        .main-content form input,
        .main-content form select {
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
        }
        .main-content form button {
            padding: 10px;
            background-color: #555;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .periodic-table-element {
            background-color: #FFD700;
            color: black;
            padding: 10px;
            border-radius: 10px;
            text-align: center;
            width: 100px;
            margin-top: 20px;
        }
        .periodic-table-element .symbol {
            font-size: 48px;
        }

    </style>
</head>
<body>
    <div class="container">

        <?php
            include 'sidenav.php';
        ?>
        <div class="main-content">
            <!---REGISTRATION FUNCTION SYNTAX ---->
            <?php 
                $con = mysqli_connect("localhost","root","","adarna"); 
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
                    $sqli_run = mysqli_query($con,$query);

                    $query2 = "INSERT INTO accounts VALUES('$lrn_number','$firstname','$middlename','$lastname','$username','$password','$section','$usertype','Active')";
                    $sqli_run2 = mysqli_query($con,$query2);

                    if($sqli_run && $sqli_run2)
                    {
                        echo "<center><h1 class='alert alert-success'>REGISTERED !</h1></center>";
                    }
                    else
                    {
                        echo "<center><h1 class='alert alert-danger'>REGISTRATION FAILED!</h1></center>";
                    }
                }
            ?>
            <!---END REGISTRATION FUNCTION SYNTAX ---->
            <h1>STUDENT DETAILS</h1>
            <a href="t-student-account-created.php" style="color:white;">View Created Accounts</a>
            <br>
            <br>
            <a href="t-student-account-archived.php" style="color:white;">View Archived Accounts</a>
            <form action="t-student-reg.php" method="Post">
                <input type="number" name="lrn" placeholder="LRN NUMBER:">
                <input type="text" name="fname" placeholder="First Name">
                <input type="text" name="mname" placeholder="Middle Name">
                <input type="text" name="lname" placeholder="Last Name">
                <select name="gender">
                    <option>Select Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
                <input type="date" name="bdate" placeholder="Birthdate">
                <input type="text" name="username" placeholder="Email Address">
                <!----<input type="password" name="password" placeholder="Password">--->
                <!---nag static ako dito since di ko pa gagawin ung adding ng section-->
                <select id="imageSelector" name="section">
                    <option value="" data-img="../img/bird.png">Select an image</option>
                    <option value="zinc" data-img="../img/zinc.png">Zinc</option>
                    <option value="silver" data-img="../img/silver.png">Silver</option>
                    <option value="tungsten" data-img="../img/tungsten.png">Tungsten</option>
                </select>
                <button type="submit" name="btnsubmit">Create</button>
            </form>
            <!---nag static design ako dito since di ko pa gagawin ung adding ng section-->
            <br>
           <img id="displayImage"  alt="Selected Section Will Appear Here" style="width: 150px; height: 150px;">
            
        </div>
    </div>
    <script>
        document.getElementById('imageSelector').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            var imageUrl = selectedOption.getAttribute('data-img');
            document.getElementById('displayImage').src = imageUrl;
        });
    </script>
</body>
</html>
