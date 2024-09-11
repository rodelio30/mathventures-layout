<?php
    define('Amember', true);
    require 'include/dbconnect.php';

    if (!empty($_SESSION['login_p'])) {
        header("Location: player/");
    }

    if (!empty($_SESSION['login_t'])) {
        header("Location: teacher/");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adarna Login</title>

  
    <!-- Enchanted Land Font Familty -->
    <link href="https://fonts.cdnfonts.com/css/enchanted-land" rel="stylesheet">

    <!-- Bevan Font Familty -->
    <link href="https://fonts.cdnfonts.com/css/bevan" rel="stylesheet">
    
    <link href="https://fonts.cdnfonts.com/css/baloo-thambi" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="img/bird.png">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #3c2a4d;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #2c3e50;
        }
        .container {
            display: flex;
            max-width: 800px;
            background-color: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .left {
            background: url('img/game_bg.png') no-repeat center center/cover;
            width: 50%;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }
        .cta-adarna {
            font-size: 2.5em;
            margin-left:50px ;
            font-family: 'Enchanted Land', sans-serif;
            font-size: 50px;
            margin-top: 100px;
            letter-spacing: 2.5rem;
            color: #FDFFAF;
            -webkit-text-stroke: 1px #D2BF10; /* Stroke width and color */
            text-shadow: 
            -5px -2px 0 rgba(0, 0, 0, 0.15),
            3px -2px 0 rgba(0, 0, 0, 0.15),
            -5px 2px 0 rgba(0, 0, 0, 0.15),
            3px 2px 0 rgba(0, 0, 0, 0.15); 
        }
        .cta-welcome {
            font-size: 2.5em;
            margin-left:30px ;
            margin-top: -20px;
            font-family: 'Enchanted Land', sans-serif;
            font-size: 40px;
            letter-spacing: 1rem;
            color: #FDFFAF;
            -webkit-text-stroke: 1px #D2BF10; /* Stroke width and color */
            text-shadow: 
            -5px -2px 0 rgba(0, 0, 0, 0.15),
            3px -2px 0 rgba(0, 0, 0, 0.15),
            -5px 2px 0 rgba(0, 0, 0, 0.15),
            3px 2px 0 rgba(0, 0, 0, 0.15); 
        }
       
        .left .cta-to {
            font-size: 2.5em;
            margin: 10px 0;
            margin-left:10px ;
            margin-top: -20px;
            font-family: 'Enchanted Land', sans-serif;
            letter-spacing: 1.0rem;
            color: #FDFFAF;
            -webkit-text-stroke: 1px #D2BF10; /* Stroke width and color */
            text-shadow: 
            -5px -2px 0 rgba(0, 0, 0, 0.15),
            3px -2px 0 rgba(0, 0, 0, 0.15),
            -5px 2px 0 rgba(0, 0, 0, 0.15),
            3px 2px 0 rgba(0, 0, 0, 0.15); 
        }
        .cta-user-login
        {
            font-size: 2.5em;
            margin: 10px 0;
            margin-left:10px ;
            margin-top: -20px;
            font-family: 'Enchanted Land', sans-serif;
            letter-spacing: 1.0rem;
            color: #000000;
            -webkit-text-stroke: 1px #000000; /* Stroke width and color */
           
        }
        .right {
            padding: 40px 20px;
            width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .right h2 {
            margin-bottom: 20px;
            color: #8e44ad;
        }
        .right input[type="email"], .right input[type="password"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .right button {
            width: 100%;
            padding: 10px;
            margin: 20px 0;
            background-color: #2c3e50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }
        .right a {
            color: #2c3e50;
            text-decoration: none;
            font-size: 0.9em;
        }
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }
            .left{
                width: 100%;
            }
            .right {
                width: 92%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <h1 class="cta-welcome">WELCOME</h1>
            <h2 class="cta-to">to</h2>
            <h1 class="cta-adarna">ADARNA</h1>
        </div>
        <div class="right">
            <!---CODE FOR ONE WAY LOGIN----->
            <?php
                // $con = mysqli_connect("localhost","root","","adarna"); 

                if(isset($_POST['btnlogin']))
                {
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    $sql = "SELECT * FROM accounts WHERE Username = ? AND Password = ? AND Usertype = 'admin' AND Status = 'Active'";
                    $stmt = mysqli_prepare($conn, $sql);
                    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
                    mysqli_stmt_execute($stmt);
                    $result_admin = mysqli_stmt_get_result($stmt);

                    $sql2 = "SELECT * FROM accounts WHERE Username = ? AND Password = ? AND Usertype = 'student' AND Status = 'Active'";
                    $stmt2 = mysqli_prepare($conn, $sql2);
                    mysqli_stmt_bind_param($stmt2, "ss", $username, $password);
                    mysqli_stmt_execute($stmt2);
                    $result_student = mysqli_stmt_get_result($stmt2);

                    if (mysqli_num_rows($result_admin) > 0) {
                        $row = mysqli_fetch_assoc($result_admin);
                        $_SESSION["login_type"] = "admin";
                        $_SESSION["login_t"] = "admin";
                    } elseif (mysqli_num_rows($result_student) > 0) {
                        $row = mysqli_fetch_assoc($result_student);
                        $_SESSION["login_type"] = "student";
                        $_SESSION["login_p"] = "student";
                    } else {
                        echo "<h1 class='alert alert-danger'>LOGIN FAILED !</h1>";
                        exit; // Prevent further execution
                    }

                    $_SESSION["login"] = true;
                    $_SESSION["user_id"] = $row["ID"];
                    $_SESSION["Firstname"] = $row["Firstname"];
                    $_SESSION["Email"] = $row["Username"]; // Assuming Username is equivalent to Email

                    echo "<script> alert('LOGIN SUCCESSFUL!')</script>";

                    if ($_SESSION["login_type"] == "admin") {
                        echo "<script> window.location.href = 'teacher/';</script>";
                    } elseif ($_SESSION["login_type"] == "student") {
                        echo "<script> window.location.href = 'player/';</script>";
                    }
                }
             ?>
             <!---END CODE FOR ONE WAY LOGIN----->
            <h2 class="cta-user-login">User Login</h2>
            <form action ="login.php" method="post">
                <input type="email" name="username" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button style="font-family: 'Enchanted Land', sans-serif; font-size:25px;"type="submit" name ="btnlogin">Login</button>
                <a href="#">Forgot Password?</a>
            </form>
        </div>
    </div>
</body>
</html>
