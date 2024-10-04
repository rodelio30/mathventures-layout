<?php
    define('Amember', true);
    require 'include/dbconnect.php';

    if (!empty($_SESSION['login_p'])) {
        header("Location: user/");
    }

    if (!empty($_SESSION['login_t'])) {
        header("Location: teacher/");
    }


                if(isset($_POST['btnlogin']))
                {
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    $sql = "SELECT * FROM accounts WHERE Email = ? AND Password = ? AND Usertype = 'admin' AND Status = 'Active'";
                    $stmt = mysqli_prepare($conn, $sql);
                    mysqli_stmt_bind_param($stmt, "ss", $email, $password);
                    mysqli_stmt_execute($stmt);
                    $result_admin = mysqli_stmt_get_result($stmt);

                    $sql2 = "SELECT * FROM accounts WHERE Email = ? AND Password = ? AND Usertype = 'student' AND Status = 'Active'";
                    $stmt2 = mysqli_prepare($conn, $sql2);
                    mysqli_stmt_bind_param($stmt2, "ss", $email, $password);
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
                        echo "<script> alert ('LOGIN FAILED !');  window.location.href = 'login.php';</script>";
                    }

                    $_SESSION["login"] = true;
                    $_SESSION["user_id"] = $row["ID"];
                    $_SESSION["Firstname"] = $row["Firstname"];
                    $_SESSION["Email"] = $row["Email"]; // Assuming Email is equivalent to Email

                    echo "<script> alert('LOGIN SUCCESSFUL!')</script>";

                    if ($_SESSION["login_type"] == "admin") {
                        echo "<script> window.location.href = 'teacher/';</script>";
                    } elseif ($_SESSION["login_type"] == "student") {
                        echo "<script> window.location.href = 'user/';</script>";
                    }
                }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathventures Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="img/logo_MV.png">

    <style>
        .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 70vh; /* Full viewport height */
}

.login-design {
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    background-color: #fff; /* Add background color if needed */
}

.form-group input {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

a.btn {
    margin-top: 10px;
    padding: 0.8rem 1.5rem;
}
    </style>
</head>
<body>
    <section class="cta-section-login">
        <a href="public/index.php" class="mt-4 ms-3"style="float: left;">
            <img src="img/public/back.png" alt="Back Button" width="50">
        </a>
        <h1 class="cta-section-login-text text-center mt-4"><span style="color: #ED5189; margin-left: -5rem;">LOG IN</span> YOUR ACCOUNT</h1>
        <br> <br> 
        <div class="container">
            <div class="card login-design">
                <form action="login.php" method="post">
                    <h1>EMAIL ADDRESS</h1>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <h1 class="mt-3">PASSWORD</h1>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <br>
                    <a href="#">Forgot password?</a>
                    <button type="submit" name="btnlogin" class="btn btn-dark float-end" style="padding: 0.8rem 1.5rem;">LOGIN</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
