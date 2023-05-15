<!-- PHP -->
<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: ../login.php");
    exit;
}
require '../function.php';
$page = 'about';
$sql_about = "SELECT * FROM tbl_about";
$query_about = mysqli_query($db,$sql_about);
$about = mysqli_fetch_array($query_about);
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
                    <h1 class="m-0">About</h1>
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
                    <form action="function.php" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Title About</label>
                                <input type="text" class="form-control" id="title" name="about_title"
                                    placeholder="Enter title" value="<?= $about['about_title'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="desc">Description About</label>
                                <input type="text" class="form-control" id="desc" name="about_desc"
                                    placeholder="Enter description" value="<?= $about['about_desc'] ?>">
                            </div>
                            <div class="d-flex gap-5">
                                <div class="form-group">
                                    <div class="d-flex flex-column">
                                        <label for="image">Image 1</label>
                                        <img class="mb-3" src="../assets/img/<?= $about['about_img1'] ?>" width="500" height="300">
                                        <input type="file" class="form-control" name="about_img1">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="d-flex flex-column">
                                        <label for="image">Image 2</label>
                                        <img class="mb-3" src="../assets/img/<?= $about['about_img2'] ?>" width="200">
                                        <input type="file" class="form-control" name="about_img2">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="editAbout" class="btn btn-primary">Update About</button>
                        </div>
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