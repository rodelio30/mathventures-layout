<?php 
    include('t-checker.php');
	error_reporting(0);
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
<!---EDIT FUNCTION SYNTAX ---->
<?php
$con = mysqli_connect("localhost", "root", "", "adarna");

if (isset($_POST['editID'])) 
{
    $id = $_POST['editID'];
    //echo $id;
    $query = "SELECT * FROM users WHERE ID ='$id' ";
    $query_run = mysqli_query($con, $query);

    foreach ($query_run as $row) 
    {
        if (isset($_POST['btnupdate'])) 
        {
            $updatedFirstname = isset($_POST['upfname']) ? $_POST['upfname'] : '';
            $updatedMiddlename = isset($_POST['upmname']) ? $_POST['upmname'] : '';
            $updatedLastname = isset($_POST['uplname']) ? $_POST['uplname'] : '';
            $updatedgender = isset($_POST['upgender']) ? $_POST['upgender'] : '';
            $updatedbdate = isset($_POST['upbdate']) ? $_POST['upbdate'] : '';
            $updatedusername = isset($_POST['upusername']) ? $_POST['upusername'] : '';
            $updatedsection = isset($_POST['upsection']) ? $_POST['upsection'] : '';
            $updatedstatus = isset($_POST['upstatus']) ? $_POST['upstatus'] : '';

            $updateUsers = "UPDATE users SET Firstname = '$updatedFirstname', Middlename = '$updatedMiddlename', Lastname = '$updatedLastname', Gender = '$updatedgender', Birthdate = '$updatedbdate', Username = '$updatedusername', Section = '$updatedsection', Status ='$updatedstatus' WHERE ID = '$id'";

             $updateAccount = "UPDATE accounts SET Firstname = '$updatedFirstname', Middlename = '$updatedMiddlename', Lastname = '$updatedLastname',Username = '$updatedusername',Section = '$updatedsection', Status ='$updatedstatus' WHERE ID = '$id'";

            $updateUsersRun = mysqli_query($con, $updateUsers);
            $updateAccountRun = mysqli_query($con, $updateAccount);
            if ($updateUsersRun && $updateAccountRun) {
                echo "<script>alert('Updated Successfully');</script>";
                echo"<script>
                        setTimeout(function(){
                            window.location.href = 't-student-reg.php'; // Replace with your target page
                        }, 1000); // 1000 milliseconds = 1 second
                    </script>";
            } else {
                echo "Failed to update details.";
            }
        }
        ?>
        <h1>STUDENT DETAILS</h1>
        <form action="t-student-edit-account.php" method="POST">
            <input type="hidden" value="<?php echo $row['ID'] ?>" name="editID">
            <input type="text" value="<?php echo $row['Firstname'] ?>" name="upfname" placeholder="First Name">
            <input type="text" value="<?php echo $row['Middlename'] ?>" name="upmname" placeholder="Middle Name">
            <input type="text" value="<?php echo $row['Lastname'] ?>" name="uplname" placeholder="Last Name">
            <select name="upgender">
                <option value="<?php echo $row['Gender'] ?>">Current Gender: <?php echo $row['Gender']; ?></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
            <input type="date" name="upbdate" value="<?php echo $row['Birthdate'] ?>" placeholder="Birthdate">
            <input type="text" value="<?php echo $row['Username'] ?>" name="upusername" placeholder="Email Address">
            <select id="imageSelector" name="upsection">
                <option value="<?php echo $row['Section'] ?>" data-img="../img/bird.png">Current Section <?php echo $row['Section']; ?></option>
                <option value="zinc" data-img="../img/zinc.png">Zinc</option>
                <option value="silver" data-img="../img/silver.png">Silver</option>
                <option value="tungsten" data-img="../img/tungsten.png">Tungsten</option>
            </select>
            <select name="upstatus">
                <option value="<?php echo $row['Status'] ?>">Current Account Status <?php echo $row['Status']; ?></option>
                <option value="Active" >Active</option>
                <option value="Inactive" >Inactive</option>
                <
            </select>
            <button type="submit" name="btnupdate">Update Details</button>
        </form>
        <!---nag static design ako dito since di ko pa gagawin ung adding ng section-->
        <br>
        <img id="displayImage" alt="Selected Section Will Appear Here" style="width: 150px; height: 150px;">
        <?php
    }
}
?>
<!---END OF EDIT FUNCTION---->
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
