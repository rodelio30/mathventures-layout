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
                        <!-- <div class="form-group">
                            <select id="formal-select" name="formal-select">
                                <option value="" disabled selected>Select a Section</option>
                                <option value="option1">Zinc</option>
                                <option value="option2">Platinum</option>
                                <option value="option3">Silver</option>
                                <option value="option3">Manganese</option>
                                <option value="option3">Tungsten</option>
                            </select>
                        </div> -->

                        <form action="accounts.php"method="post">
                            <div>
                                <select id="imageSelector" name="section">
                                    <option value="" disabled selected>Select a Section</option>
                                    <option value="zinc">Zinc</option>
                                    <option value="platinum">Platinum</option>
                                    <option value="silver">Silver</option>
                                    <option value="manganese">Manganese</option>
                                    <option value="tungsten">Tungsten</option>
                                </select>
                                <input type="submit" name="btnfilter"></button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5"></div> <!-- Empty space to push buttons to the right -->
                    <div class="col-md-4 d-flex justify-content-end">
                        <a href="account-creation.php" class="accounts-btn me-2">Create Student Account</a>
                        <a href="accounts-archive.php" class="accounts-btn archive-btn">View Student Archive</a>
                    </div>
                </div>
        <!-- 
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
        -->

        <!---DISPLAYING THE CREATED ACCOUNT---->
        <?php
            if(isset($_POST['btnfilter']))
            {
                $section = $_POST['section'];
                $querydisplay ="SELECT * FROM users WHERE Section ='$section' AND Status ='Active' ORDER BY Lastname ASC";
                $query_run = mysqli_query($conn,$querydisplay);
                if(mysqli_num_rows($query_run) > 0)
                {
                    while($row = mysqli_fetch_assoc($query_run))
                    {
                        ?>

                <div class="account-item mb-2">
                    <div class="account-info">
                        <div class="account-index">1</div>
                        <div class="account-avatar">
                            <img src="../img/teacher/icon-female.png" alt="Avatar"class="student-girl-icon">
                        </div>
                        <div class="account-name"><?php echo $row['Firstname']." ".$row['Middlename']." ".$row['Lastname']?></div>
                    </div>
                    <div class="account-actions">
                        <form action="account-edit.php" method="POST">
                            <input type="hidden" name="editID" value="<?php echo $row['ID']?>">
                            <input type="hidden" name="editGender" value="<?php echo $row['Gender']?>">
                            <input type="hidden" name="editSection" value="<?php echo $row['Section']?>">
                            <button name ="btnedit" class="btn edit-btn">Edit</button>
                            <!-- <a href="account-edit.php" name="btnedit" class="btn edit-btn">Edit</a> -->
                            
                        </form>
                        <form action="accounts.php"method="POST">
                            <input type="hidden" name="editID" value="<?php echo $row['ID']?>">
                            <input type="hidden" name="editGender" value="<?php echo $row['Gender']?>">
                            <input type="hidden" name="editSection" value="<?php echo $row['Section']?>">
                            <button name="btnarchive" class="btn remove-btn">Archive</button>
                        </form>
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
                $queryArchiveDetailsRun = mysqli_query($conn,$queryArchiveDetails);
                $queryArchiveAccounts = mysqli_query($conn,$queryArchiveAccounts);

                if($queryArchiveDetailsRun && $queryArchiveAccounts)
                {
                    echo "<script>alert('ARCHIVED Successfully');</script>";
                    echo"<script>
                        setTimeout(function(){
                            window.location.href = 'accounts.php'; // Replace with your target page
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
    </div>
</body>
</html>
