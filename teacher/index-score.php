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
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<form method='get' action='index-score-manage.php'>";
            echo "<label for='student'>Select Student:</label>";
            echo "<select name='student_id' required>";
            while($row = $result->fetch_assoc()) {
                echo "<option value='" . $row["ID"]. "'>" . $row["Firstname"]. "</option>";
            }
            echo "</select>";
            echo "<input type='submit' value='Manage Chapters'>";
            echo "</form>";
        } else {
            echo "No students found";
        }

        $conn->close();
        ?>


        </div>
    </div>
</body>
</html>
