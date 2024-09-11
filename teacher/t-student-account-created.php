<?php
include('t-checker.php');
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounts Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333;
            color: #fff;
            margin: 0;
            padding: 0;
        }
        .sidebar {
            background-color: #444;
            padding: 10px;
            width: 250px;
            position: fixed;
            height: 100%;
        }
        .sidebar img {
            display: block;
            margin: 0 auto 20px;
            width: 80px;
        }
        .sidebar a {
            display: block;
            padding: 10px;
            color: #fff;
            text-decoration: none;
            margin-bottom: 5px;
        }
        .sidebar a:hover {
            background-color: #555;
        }
        .main-content {
            margin-left: 270px;
            padding: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header select, .header input {
            margin-right: 10px;
        }
        .accounts {
            margin-top: 20px;
            background-color: #222;
            padding: 20px;
            border-radius: 10px;
        }
        .account-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #333;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .account-item button {
            margin-left: 10px;
            padding: 5px 10px;
            background-color: #666;
            border: none;
            color: #fff;
            border-radius: 3px;
        }
        .account-item button:hover {
            background-color: #777;
        }
    </style>
</head>
<body>

    <!-- <div class="sidebar">
         <img src="../img/bird.png" alt="Phoenix Logo">
        <a href="t-dashboard.php">Dashboard</a>
        <a href="#">Profile</a>
        <a href="t-student-reg.php">Accounts</a>
        <a href="#">Game Stats</a>
        <a href="#">Achievements</a>
        <a href="#">Leaderboards</a>
        <a href="login.php">Logout</a>
    </div> -->
        <?php
            include 'sidenav.php';
        ?>

    <div class="main-content">
        <div class="header">
            <form action="t-student-account-created.php"method="post">
                <div>
                    <select id="imageSelector" name="section">
                        <option value="zinc" data-img="../img/zinc.png">Zinc</option>
                        <option value="silver" data-img="../img/silver.png">Silver</option>
                        <option value="tungsten" data-img="../img/tungsten.png">Tungsten</option>
                    </select>
                    <input type="submit" name="btnfilter"></button>
                </div>
                <br>
                <a href="t-student-reg.php" style="color:white;">Create Student Account</a>
            </form>
        </div>
        <!---DISPLAYING THE CREATED ACCOUNT---->
        <?php
            $con = mysqli_connect("localhost","root","","adarna"); 
            if(isset($_POST['btnfilter']))
            {
                $section = $_POST['section'];
                $querydisplay ="SELECT * FROM users WHERE Section ='$section' AND Status ='Active' ORDER BY Lastname ASC";
                $query_run = mysqli_query($con,$querydisplay);
                if(mysqli_num_rows($query_run) > 0)
                {
                    while($row = mysqli_fetch_assoc($query_run))
                    {
                        ?>
                        <div class="accounts">
                            <div class="account-item">
                                <span><?php echo $row['Firstname']." ".$row['Middlename']." ".$row['Lastname']?></span>
                                <div>
                                    <form action="t-student-edit-account.php" method="POST">
                                        <input type="hidden" name="editID" value="<?php echo $row['ID']?>">
                                        <input type="hidden" name="editGender" value="<?php echo $row['Gender']?>">
                                        <input type="hidden" name="editSection" value="<?php echo $row['Section']?>">
                                        <button name ="btnedit">Edit</button>
                                        
                                    </form>
                                    <br>
                                    <form action="t-student-account-created.php"method="POST">
                                        <input type="hidden" name="editID" value="<?php echo $row['ID']?>">
                                        <input type="hidden" name="editGender" value="<?php echo $row['Gender']?>">
                                        <input type="hidden" name="editSection" value="<?php echo $row['Section']?>">
                                        <button name="btnarchive">Archive</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                else
                {
                     echo "<center><h1 class='alert alert-danger'> No accounts in this section !</h1></center>";
                }
            }
            else if (isset($_POST['btnarchive']))
            {
                $activeID = $_POST['editID'];
                $queryArchiveDetails = "UPDATE users SET Status ='Inactive' WHERE ID = '$activeID'";
                $queryArchiveAccounts = "UPDATE accounts SET Status ='Inactive' WHERE ID = '$activeID'";
                $queryArchiveDetailsRun = mysqli_query($con,$queryArchiveDetails);
                $queryArchiveAccounts = mysqli_query($con,$queryArchiveAccounts);

                if($queryArchiveDetailsRun && $queryArchiveAccounts)
                {
                    echo "<script>alert('ARCHIVED Successfully');</script>";
                    echo"<script>
                        setTimeout(function(){
                            window.location.href = 't-student-account-created.php'; // Replace with your target page
                        }, 1000); // 1000 milliseconds = 1 second
                    </script>";
                }
                else
                {
                    echo "<center><h1 class='alert alert-success'>ARCHIVED FAILED !</h1></center>";
                }

            }
            else
            {
                echo "<center><h1 class='alert alert-danger'>Please select a section to see created accounts </h1></center>";
            }
        ?>
        <!---END DISPLAYING THE CREATED ACCOUNT---->
        
    </div>

</body>
</html>
