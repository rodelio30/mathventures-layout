<?php
include('t-checker.php');

if(isset($_GET['secID'])) {
    $student_section = $_GET['secID'];
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
        $topnavname = "GRADE 7 - ZINC";
        include "topnav.php";
    ?>
    <div class="content" style="overflow-y: auto !important;">
        <?php
            $nav_active = "dashboard";
            include "sidebar.php";
        ?>
        <div class="main-content bg-dashboard" style="height: 800px; margin-bottom: 1rem;">
            <div class="row">
                <div class="col-md-7">
                    <div class="sec-top">
                        <a href="index-view-section.php?secID=<?=$student_section?>">
                        <img src="../img/teacher/icons-back.png" alt="Icon Back" class="icon-back">
                        </a>
                    </div>
                </div>
                <div class="col-md-5">
                    <h2 class="progress-name">Student Name</h2>
                </div>
            </div>
            <div class="progress-top-list">
                <div class="row progress-table-head">
                    <div class="col-md-3">
                        Chapter Name
                    </div>
                    <div class="col-md-3">
                        Status
                    </div>
                    <div class="col-md-3">
                        Date
                    </div>
                    <div class="col-md-2">
                        Quiz Score
                    </div>
                </div>
            </div>
            <?php
            $student_id = $_GET['student_id'];

            // Fetch all chapters (1 to 10)
            for ($i = 1; $i <= 10; $i++) {
                // Query to get the chapter details for the student
                $chapter_query = "SELECT * FROM student_chapters 
                                WHERE student_id = '$student_id' AND chapter_number = $i";
                $chapter_result = mysqli_query($conn, $chapter_query);
                $chapter = mysqli_fetch_assoc($chapter_result);

                // Determine the status icon and other details
                if ($chapter) {
                    $status_icon = ($chapter['status'] == 'completed') ? "icon-status-check.png" : "icon-status-ex.png";
                    $completed_date = $chapter['completed_date'] ? date('m/d/y', strtotime($chapter['completed_date'])) : '';
                    $score = $chapter['score'] ? "<span style='color: #2BA330;'>{$chapter['score']}</span>/10" : '-';
                } else {
                    $status_icon = "icon-status-ex.png";
                    $completed_date = '';
                    $score = '-';
                }
                ?>

            <div class="progress-list">
                <div class="row progress-table-list">
                    <div class="col-md-3">
                        Chapter <?php echo $i; ?>
                    </div>
                    <div class="col-md-3">
                        <img src="../img/teacher/<?php echo $status_icon; ?>" alt="Status Check Icon" class="icon-status">
                    </div>
                    <div class="col-md-3">
                        <?php echo $completed_date; ?>
                    </div>
                    <div class="col-md-2 text-center">
                        <?php echo $score; ?>
                    </div>
                </div>
                </div>

                <?php
            }
            ?>
        </div>
    </div>
</body>
</html>
