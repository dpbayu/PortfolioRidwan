<!-- PHP -->
<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: ../login.php");
    exit;
}
require '../function.php';
$page = 'home';
$sql_home = "SELECT * FROM tbl_home";
$query_home = mysqli_query($db,$sql_home);
$home = mysqli_fetch_array($query_home);
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
          <h1 class="m-0">Home</h1>
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
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="home_title" placeholder="Enter title"
                  value="<?= $home['home_title'] ?>">
              </div>
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="home_name" placeholder="Enter name"
                  value="<?= $home['home_name'] ?>">
              </div>
              <div class="form-group">
                <div class="d-flex flex-column">
                  <label for="image">Image Home</label>
                  <img class="mb-3" src="../assets/img/<?= $home['home_img'] ?>" width="500">
                  <input type="file" class="form-control" name="home_img">
                </div>
              </div>
              <div class="form-group">
                <div class="d-flex flex-column">
                  <label for="image">Image Resume</label>
                  <img class="mb-3" src="../assets/img/<?= $home['resume_img'] ?>" width="200">
                  <input type="file" class="form-control" name="resume_img">
                </div>
              </div>
              <div class="form-group">
                <div class="d-flex flex-column">
                  <label for="image">Image Section 5</label>
                  <img class="mb-3" src="../assets/img/<?= $home['section5_img1'] ?>" width="200">
                  <input type="file" class="form-control" name="section5_img1">
                </div>
              </div>
              <div class="form-group">
                <div class="d-flex flex-column">
                  <label for="image">Image Section 5</label>
                  <img class="mb-3" src="../assets/img/<?= $home['section5_img2'] ?>" width="200">
                  <input type="file" class="form-control" name="section5_img2">
                </div>
              </div>
              <button type="submit" name="editHome" class="btn btn-primary">Update Home</button>
            </div>
          </form>
        </div>
      </section>
      <!-- Main Content End -->
    </div>
    <!-- Content Wrapper End -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://github.com/dpbayu" target="_blank">Dwi Putra Bayu</a>.</strong>
      All rights reserved.
    </footer>
  </div>
  <!-- Script JS Start -->
  <?php require 'partials/js.php' ?>
  <!-- Script JS End -->
</body>

</html>