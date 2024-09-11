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
    <title>Mathventures Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="img/logo_MV.png">

</head>
<body>
    <section class="cta-section-login">
        <a href="about.php" class="mt-4 ms-3"style="float: left;">
            <img src="img/public/back.png" alt="Back Button" width="50">
        </a>
        <h1 class="cta-section-login-text text-center mt-4"><span style="color: #ED5189; margin-left: -5rem;">LOG IN</span> YOUR ACCOUNT</h1>
        <br> <br> 
        <div class="container">
            <div class="card login-design">
                <form action="#">
                    <h1>EMAIL ADDRESS</h1>
                    <div class="form-group">
                        <input type="text" class="form-control">
                    </div>
                    <h1 class="mt-3">PASSWORD</h1>
                    <div class="form-group">
                        <input type="text" class="form-control">
                    </div>
                    <br>
                    <a href="#">Forgot password?</a>
                    <a href="#" class="btn btn-dark float-end" style="">LOGIN</a>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
