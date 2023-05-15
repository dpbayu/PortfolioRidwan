<!-- PHP -->
<?php
session_start();
if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}
require 'function.php';
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $result = mysqli_query($db, "SELECT * FROM tbl_user WHERE username = '$username'");
    // Cek username
    if (mysqli_num_rows($result) === 1) {
        // Cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // Set session
            $_SESSION["login"] = true;
            header("Location: admin/index.php");
            exit;
        }
    }
    $error = true;
}
?>
<!-- PHP -->
<html lang="en">

<!-- Head Start -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
    <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
</head>
<!-- Head End -->

<body class="login-page" style="min-height: 496.781px;">
    <!-- Content Start -->
    <div class="login-box">
        <div class="login-logo">
            <a href="index.php"><b>Portfolio </b>Ridwan</a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Login</p>
                <?php if(isset($error)) : ?>
                <p style="color: red; font-style: italic;">Username / password salah</p>
                <?php endif; ?>
                <form action="" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="username" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" name="login" class="btn btn-primary btn-block">LOGIN</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Content End -->
        <!-- jQuery Start -->
        <script src="admin/plugins/jquery/jquery.min.js"></script>
        <script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="admin/dist/js/adminlte.min.js"></script>
        <!-- jQuery End -->
</body>

</html>