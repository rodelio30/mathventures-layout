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
        $topnavname = "GRADE 7 - ZINC";
        include "topnav.php";
    ?>
    <div class="content" style="overflow-y: auto !important;">
        <?php
            $nav_active = "dashboard";
            include "sidebar.php";
        ?>
        <div class="main-content bg-dashboard" style="height: auto !important;">
            <div class="row">
                <div class="col-md-7">
                    <div class="sec-top">
                        Student List
                    </div>
                </div>
                <div class="col-md-4">
                            <div class="form-group mt-2">
                                <select id="sort-select" name="formal-select">
                                    <option value="" disabled selected>Students from A - Z</option>
                                    <option value="option1">Option 1</option>
                                    <option value="option2">Option 2</option>
                                    <option value="option3">Option 3</option>
                                </select>
                            </div>
                    <!-- <div class="row">
                        <div class="col-md-6 mt-3">
                            <div class="form-group">
                                <select id="sort-select" name="formal-select">
                                    <option value="" disabled selected>Students from A - Z</option>
                                    <option value="option1">Option 1</option>
                                    <option value="option2">Option 2</option>
                                    <option value="option3">Option 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="form-group">
                                <select id="section-select" name="formal-select">
                                    <option value="" disabled selected>Grade 7 - Zinc</option>
                                    <option value="option1">Option 1</option>
                                    <option value="option2">Option 2</option>
                                    <option value="option3">Option 3</option>
                                </select>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
             <div class="student-list">
                <div class="row student-table-head">
                    <div class="col-md-3 ms-3">
                        No.
                    </div>
                    <div class="col-md-3">
                        Name
                    </div>
                    <div class="col-md-4">
                        Current Chapter
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
        <!---DISPLAYING THE CREATED ACCOUNT---->
        <?php
            if(isset($_GET['secID']))
            {
                $student_section = $_GET['secID'];
                $querydisplay ="SELECT * FROM users WHERE Section ='$student_section' AND Status ='Active' ORDER BY Lastname ASC";
                $query_run = mysqli_query($conn,$querydisplay);
                if(mysqli_num_rows($query_run) > 0)
                {
                    $student_count = 1;
                    while($row = mysqli_fetch_assoc($query_run))
                    {
                        // Get the student's ID
                        $student_id = $row['ID'];

                        // Query to find the highest completed chapter for the student
                        $chapter_query = "SELECT MAX(chapter_number) as current_chapter 
                                        FROM student_chapters 
                                        WHERE student_id = '$student_id' AND status = 'completed'";
                        $chapter_result = mysqli_query($conn, $chapter_query);
                        $chapter_row = mysqli_fetch_assoc($chapter_result);

                        // Determine the current chapter; if no chapter completed, default to 1
                        $current_chapter = $chapter_row['current_chapter'] ? $chapter_row['current_chapter'] + 1 : 1;

                        ?>
                            <div class="student-item">
                                <div><?=$student_count?></div>
                                <div class="student-info">
                                    <img src="../img/teacher/icon-female.png" alt="Avatar"class="student-girl-icon">
                                    <span><?php echo $row['Firstname']." ".$row['Middlename']." ".$row['Lastname']?></span>
                                </div>
                                <div><?php echo $current_chapter; ?></div>
                                <div>
                                    <a href="index-score-manage.php?student_id=<?=$row['ID']?>&secID=<?=$student_section?>" class="view-btn">Play</a>
                                    <a href="index-view-progress.php?secID=<?=$student_section?>&student_id=<?=$row['ID']?>" class="view-btn">View</a>
                                </div>
                            </div>
                        <?php
                        $student_count++;
                    }
                }
            }
        ?>
        <!---END DISPLAYING THE CREATED ACCOUNT---->
    </div>
        </div>
    </div>
</body>
</html>
