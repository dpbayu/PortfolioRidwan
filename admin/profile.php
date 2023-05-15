<!-- PHP -->
<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: ../login.php");
    exit;
}
require '../function.php';
$page = 'profile';
$sql_profile = "SELECT * FROM tbl_user";
$query_profile = mysqli_query($db,$sql_profile);
$profile = mysqli_fetch_array($query_profile);
?>
<!-- PHP -->
<!DOCTYPE html>
<html lang="en">

<!-- Head Start -->
<?php require 'partials/head.php' ?>
<!-- Head End -->

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader Start -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>
        <!-- Preloader End -->
        <!-- Navbar Start -->
        <?php require 'partials/navbar.php' ?>
        <!-- Navbar End -->
        <!-- Sidebar Start -->
        <?php require 'partials/aside.php' ?>
        <!-- Sidebar End -->
        <!-- Content Wrapper Start -->
        <div class="content-wrapper">
            <!-- Page Header Start -->
            <div class="content-header">
                <div class="container-fluid">
                    <h1 class="m-0">Profile</h1>
                </div>
            </div>
            <!-- Page Header End -->
            <!-- Main content Start -->
            <section class="content">
                <div class="container-fluid">
                    <?php
                        if (isset($_GET['success'])) {
                            $msg = $_GET['success'];
                            echo '
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>'.$msg.'</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
                        }
                        if (isset($_GET['failed'])) {
                            $msg = $_GET['failed'];
                            echo '
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>'.$msg.'</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
                        }
                    ?>
                    <form class="pb-5" action="function.php" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username"
                                    placeholder="Enter username" value="<?= $profile['username'] ?>">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="password">Password</label>
                                <input class="form-control" type="password" id="password" name="password">
                            </div>
                        </div>
                        <button type="submit" name="editProfile" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </section>
            <!-- Main Content End -->
        </div>
        <!-- Content Wrapper End -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://github.com/dpbayu" target="_blank">Dwi Putra
                    Bayu</a>.</strong>
            All rights reserved.
        </footer>
    </div>
    <!-- Script JS Start -->
    <?php require 'partials/js.php' ?>
    <!-- Script JS End -->
</body>

</html>