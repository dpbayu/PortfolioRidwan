<!-- PHP -->
<?php
    require 'function.php';
    $query = "SELECT * FROM tbl_home, tbl_about, tbl_contact";
    $run = mysqli_query($db,$query);
    $user = mysqli_fetch_array($run);
?>
<!-- PHP -->
<!doctype html>
<html lang="en">
<!-- Head Start -->
<?php require 'partials/head.php' ?>
<!-- Head End -->

<body>
    <!-- Nav Start -->
    <?php require 'partials/nav.php' ?>
    <!-- Nav End -->
    <div class="main">
        <!-- Section Home Start -->
        <?php require 'frontend/section-1.php' ?>
        <!-- Section Home End -->
        <!-- Section About Start -->
        <?php require 'frontend/section-2.php' ?>
        <!-- Section About End -->
        <!-- Section Resume Start -->
        <?php require 'frontend/section-3.php' ?>
        <!-- Section Resume End -->
        <!-- Section Contact Start -->
        <?php require 'frontend/section-4.php' ?>
        <!-- Section Contact End -->
        <!-- Section 5 Start -->
        <?php require 'frontend/section-5.php' ?>
        <!-- Section 5 End -->
    </div>
    <!-- Footer Start -->
    <?php require 'partials/footer.php' ?>
    <!-- Footer End -->
</body>

</html>