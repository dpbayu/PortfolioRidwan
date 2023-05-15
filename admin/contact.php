<!-- PHP -->
<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: ../login.php");
    exit;
}
require '../function.php';
$page = 'contact';
$sql_contact = "SELECT * FROM tbl_contact";
$query_contact = mysqli_query($db,$sql_contact);
$contact = mysqli_fetch_array($query_contact);
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
                    <h1 class="m-0">Contact</h1>
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
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="contact_address"
                                    placeholder="Enter address" value="<?= $contact['contact_address'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="contact_phone"
                                    placeholder="Enter phone" value="<?= $contact['contact_phone'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="contact_email"
                                    placeholder="Enter email" value="<?= $contact['contact_email'] ?>">
                            </div>
                            <div class="form-group">
                                <div class="d-flex flex-column">
                                    <label for="image">Image Contact</label>
                                    <img class="mb-3" src="../assets/img/<?= $contact['contact_img'] ?>" width="300" height="500">
                                    <input type="file" class="form-control" name="contact_img">
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="editContact" class="btn btn-primary">Edit</button>
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