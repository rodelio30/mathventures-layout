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
$id = $_GET['id'];

// Fetch current score details
$sql = "SELECT * FROM student_chapters WHERE id='$id' AND student_id='$student_id'";
$result = $conn->query($sql);
$score_details = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_score = $_POST['score'];

    $update_sql = "UPDATE student_chapters SET score='$new_score' WHERE id='$id' AND student_id='$student_id'";

    if ($conn->query($update_sql) === TRUE) {
        echo "Score updated successfully";
        header("Location: index-score-manage.php?student_id=".$student_id."&secID=".$student_section."");
        exit();
    } else {
        echo "Error updating score: " . $conn->error;
    }
}

$conn->close();
?>

<h2>Edit Score for Chapter <?php echo $score_details['chapter_number']; ?></h2>

<form method="post" action="">
    Score: <input type="number" name="score" value="<?php echo $score_details['score']; ?>" min="1" max="10" required><br>
    <input type="submit" value="Update Score">
</form>

<a href="index-score-manage.php?student_id=<?php echo $student_id; ?>&secID=<?=$student_section?>">Back to Manage Chapters</a>

        </div>
    </div>
</body>
</html>
