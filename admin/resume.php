<!-- PHP -->
<?php
require '../function.php';
$page = 'resume';
$sql_resume = "SELECT * FROM tbl_resume";
$query_resume = mysqli_query($db,$sql_resume);
$resume = mysqli_fetch_array($query_resume);
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
                    <h1 class="m-0">Resume</h1>
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
                    <div class="col-12 mb-5 d-flex flex-column flex-md-row">
                        <!-- Full Time Start -->
                        <div class="col-12 col-sm-4 my-3">
                            <div class="professional">
                                <h5 class="fw-800 fs-3">Kerja Agensi</h5>
                                <ul>
                                    <?php 
                                        $sql_fulltime = "SELECT * FROM tbl_resume";
                                        $query_fulltime = mysqli_query($db,$sql_fulltime);
                                        while ($fulltime = mysqli_fetch_array($query_fulltime)) {
                                        if ($fulltime['type_resume'] == 'ft') {
                                    ?>
                                    <li>
                                        <div>
                                            <h6 class="text mb-1"><?= $fulltime['org_resume'] ?></h6>
                                            <p><?= $fulltime['desc_resume'] ?></p>
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#editFulltime<?= $fulltime['id'] ?>">
                                                Edit
                                            </button>
                                            <a onclick="return confirm('Are you sure delete this data ?')"
                                                href="deleteResume.php?id=<?= $fulltime['id'] ?>"
                                                class="btn btn-danger">
                                                Delete
                                            </a>
                                        </div>
                                    </li>
                                    <!-- Edit Modal Fulltime Start -->
                                    <div class="modal fade" id="editFulltime<?= $fulltime['id'] ?>" tabindex="-1"
                                        aria-labelledby="editModalLabel" aria-hidden="true">
                                        <form action="function.php" method="POST">
                                            <?php
                                                $id = @$_GET['id'];
                                            ?>
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="editModalLabel">
                                                            Modal title</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group col-12">
                                                            <div class="form-group mb-3 w-100">
                                                                <input type="hidden" class="form-control" name="id"
                                                                    value="<?= $fulltime['id'] ?>">
                                                                <label class="form-label" for="org_resume">Organization
                                                                    Name</label>
                                                                <input class="form-control" type="text" id="org_resume"
                                                                    name="org_resume" placeholder="Organization Name"
                                                                    value="<?= $fulltime['org_resume'] ?>">
                                                            </div>
                                                            <div class="form-group mb-3 w-100">
                                                                <label class="form-label" for="desc_resume">Description
                                                                    Resume</label>
                                                                <input class="form-control" type="text" id="desc_resume"
                                                                    name="desc_resume" placeholder="Description Resume"
                                                                    value="<?= $fulltime['desc_resume'] ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary"
                                                            name="editResume">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Edit Modal Fulltime End -->
                                    <?php
                                    }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <!-- Full Time End -->
                        <!-- Freelance Start -->
                        <div class="col-12 col-sm-4 my-3">
                            <div class="freelance">
                                <h5 class="fw-800 fs-3">Kerja Lepas</h5>
                                <ul>
                                    <?php 
                                $sql_freelance = "SELECT * FROM tbl_resume";
                                $query_freelance = mysqli_query($db,$sql_freelance);
                                while ($freelance = mysqli_fetch_array($query_freelance)) {
                                if ($freelance['type_resume'] == 'fr') {
                                    ?>
                                    <li>
                                        <div>
                                            <h6 class="text mb-1"><?= $freelance['org_resume'] ?></h6>
                                            <p><?= $freelance['desc_resume'] ?></p>
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#editFreelance<?= $freelance['id'] ?>">
                                                Edit
                                            </button>
                                            <a onclick="return confirm('Are you sure delete this data ?')"
                                                href="deleteResume.php?id=<?= $freelance['id'] ?>"
                                                class="btn btn-danger">
                                                Delete
                                            </a>
                                        </div>
                                    </li>
                                    <!-- Edit Modal Freelance Start -->
                                    <div class="modal fade" id="editFreelance<?= $freelance['id'] ?>" tabindex="-1"
                                        aria-labelledby="editModalLabel" aria-hidden="true">
                                        <form action="function.php" method="POST">
                                            <?php
                                                $id = @$_GET['id'];
                                            ?>
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="editModalLabel">
                                                            Modal title</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group col-12">
                                                            <div class="form-group mb-3 w-100">
                                                                <input type="hidden" class="form-control" name="id"
                                                                    value="<?= $freelance['id'] ?>">
                                                                <label class="form-label" for="org_resume">Organization
                                                                    Name</label>
                                                                <input class="form-control" type="text" id="org_resume"
                                                                    name="org_resume" placeholder="Organization Name"
                                                                    value="<?= $freelance['org_resume'] ?>">
                                                            </div>
                                                            <div class="form-group mb-3 w-100">
                                                                <label class="form-label" for="desc_resume">Description
                                                                    Resume</label>
                                                                <input class="form-control" type="text" id="desc_resume"
                                                                    name="desc_resume" placeholder="Description Resume"
                                                                    value="<?= $freelance['desc_resume'] ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary"
                                                            name="editResume">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Edit Modal Freelance End -->
                                    <?php
                                    }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <!-- Freelance End -->
                        <img class="col-12 col-sm-4" src="../assets/img/<?= $resume['img_resume'] ?>" alt="Photo About">
                    </div>
                    <!-- Add Resume Start -->
                    <form action="function.php" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Select Type</label><br>
                                <select name="type_resume" class="form-control">
                                    <option value="ft">Full Time</option>
                                    <option value="fr">Freelance</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="org_resume">Name Organization</label>
                                <input type="text" class="form-control" id="org_resume" name="org_resume"
                                    placeholder="Enter Organization">
                            </div>
                            <div class="form-group">
                                <label for="desc_resume">Dsecription Resume</label>
                                <input type="text" class="form-control" id="desc_resume" name="desc_resume"
                                    placeholder="Enter Description">
                            </div>
                        </div>
                        <button type="submit" name="addResume" class="btn btn-primary">Add</button>
                    </form>
                    <!-- Add Resume End -->
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