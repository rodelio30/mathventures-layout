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
        $topnavname = "INDEX SCORE";
        include "topnav.php";
    ?>
    <div class="content">
        <?php
            $nav_active = "dashboard";
            include "sidebar.php";
        ?>
        <div class="main-content">

            <?php
            $student_id = $_GET['student_id'];
            $student_section = $_GET['secID'];

            // Fetch student information
            $student_sql = "SELECT * FROM users WHERE ID='$student_id'";
            $student_result = $conn->query($student_sql);
            $student = $student_result->fetch_assoc();

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $chapter_number = $_POST['chapter_number'];
                $score = $_POST['score'];
                $status = 'completed'; 
                $completed_date = date('Y-m-d');

                // Check if the student already has a score for this chapter
                $check_sql = "SELECT * FROM student_chapters WHERE student_id='$student_id' AND chapter_number='$chapter_number'";
                $check_result = $conn->query($check_sql);

                if ($check_result->num_rows > 0) {
                    echo "Error: This student already has a score for Chapter " . $chapter_number;
                } else {
                    // Check if the student has completed all previous chapters
                    $all_completed = true;

                    for ($i = 1; $i < $chapter_number; $i++) {
                        $prev_check_sql = "SELECT * FROM student_chapters WHERE student_id='$student_id' AND chapter_number='$i'";
                        $prev_check_result = $conn->query($prev_check_sql);

                        if ($prev_check_result->num_rows == 0) {
                            $all_completed = false;
                            echo "Error: The student must complete Chapter " . $i . " before scoring Chapter " . $chapter_number . "<br>";
                            break;
                        }
                    }

                    if ($all_completed) {
                        // Insert the new score for the current chapter
                        $sql = "INSERT INTO student_chapters (student_id, chapter_number, score, completed_date, status) 
                                VALUES ('$student_id', '$chapter_number', '$score', '$completed_date', '$status')";

                        if ($conn->query($sql) === TRUE) {
                            echo "Score added successfully for " . $student['Firstname'];
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                    }
                }
            }

            // Display student name
            echo "";
            echo "<h2>Managing Chapters for: " . $student['Firstname'] . "</h2>";

            // Form to add a chapter score
            echo "<form method='post' action=''>";
            echo "Chapter: <input type='number' name='chapter_number' min='1' max='10' required><br>";
            echo "Score: <input type='number' name='score' min='1' max='10' required><br>";
            echo "<input type='submit' value='Add Score'>";
            echo "</form>";

            // Display current scores for the student
            $chapters_sql = "SELECT * FROM student_chapters WHERE student_id='$student_id'";
            $chapters_result = $conn->query($chapters_sql);

            if ($chapters_result->num_rows > 0) {
                echo "<h3>Current Scores:</h3>";
                echo "<table><tr><th>Chapter</th><th>Score</th><th>Status</th><th>Completed Date</th><th>Actions</th></tr>";
                while($row = $chapters_result->fetch_assoc()) {
                    echo "<tr><td>" . $row["chapter_number"]. "</td><td>" . $row["score"]. "</td><td>" . $row["status"]. "</td><td>" . $row["completed_date"]. "</td>";
                    echo "<td><a href='index-score-edit.php?id=" . $row['id'] . "&student_id=".$student_id."&secID=".$student_section."'>Edit</a></td></tr>";
                }
                echo "</table>";
            } else {
                echo "No scores found for this student.";
            }
            $conn->close();
            ?>
            <br>
            <a href="index-view-section.php?secID=<?=$student_section?>">Back to Student Choices</a>
        </div>
    </div>
</body>
</html>
