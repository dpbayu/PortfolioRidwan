<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>
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
                <li class="nav-header">EXAMPLES</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>