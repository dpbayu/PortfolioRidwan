<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Dashboard</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="index.php" class="nav-link <?php if ($page == 'home'){ echo 'active'; } ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link <?php if ($page == 'about'){ echo 'active'; } ?>">
                        <i class="nav-icon fas fa-address-card"></i>
                        <p>About</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="resume.php" class="nav-link <?php if ($page == 'resume'){ echo 'active'; } ?>">
                        <i class="nav-icon fas fa-briefcase"></i>
                        <p>Resume</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link <?php if ($page == 'contact'){ echo 'active'; } ?>">
                        <i class="nav-icon fas fa-phone"></i>
                        <p>Contact</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="profile.php" class="nav-link <?php if ($page == 'profile'){ echo 'active'; } ?>">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Profile</p>
                    </a>
                </li>
                <div class="user-panel mt-3 pb-3 mb-3 d-flex"></div>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link">
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>