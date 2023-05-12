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
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div>
          </div>
        </div>
      </div>
      <!-- Page Header End -->
      <!-- Main content Start -->
      <section class="content">
        <div class="container-fluid">
          <h1>Hello World!</h1>
        </div>
      </section>
      <!-- Main Content End -->
    </div>
        <!-- Content Wrapper End -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>
  </div>
  <!-- Script JS Start -->
  <?php require 'partials/js.php' ?>
  <!-- Script JS End -->
</body>

</html>