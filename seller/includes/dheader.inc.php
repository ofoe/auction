<header class="main-header " id="header">
    <nav class="navbar navbar-static-top navbar-expand-lg">
        <div class="navbar-right ">
            <ul class="nav navbar-nav">
                <li class="user-menu"></li>
                <li class="user-menu"></li>
                <li class="user-menu"></li>
                <li class="user-menu"></li>
                <li class="user-menu"></li>
                <!-- User Account -->
                <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <span class="d-none d-lg-inline-block"><?php echo $_SESSION['email']; ?></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a href="user-profile.html">
                                <i class="mdi mdi-account"></i> My Profile
                            </a>
                        </li>
                        <li>
                            <a href="#"> <i class="mdi mdi-settings"></i> Account Setting </a>
                        </li>

                        <li class="dropdown-footer">
                            <a href="./includes/dlogout.inc.php"> <i class="mdi mdi-logout"></i> Log Out </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>