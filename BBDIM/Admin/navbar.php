<style>
    .collapse a {
        text-indent: 10px;
    }

    nav#sidebar {
        /*background: url(assets/uploads/<?php echo $_SESSION['system']['cover_img'] ?>) !important*/
    }
</style>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-white-primary bg-white elevation-4">
    <!-- Brand Logo -->
    <a href="..\index.php" class="brand-link">
        <img src="dist/img/ds.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Digital Blood Bank</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar ">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/AdminLTELogo.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="index.php?page=dashboard" class="d-block text-primary">Admin Dashboard</a>
            </div>
        </div>
        <!--php
        include 'db_connect.php';
        $sql = "SELECT * FROM messages WHERE STATUS=1";
        $result = $conn->query($sql);
        $n = $result->num_rows;
        if ($n != 0) {
            $mes = '<span class="right badge badge-danger">' . $n . ' Unread</span>';
        } else {
            $mes = "";
        }
        ?-->
        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2" id="sidebar" class=''>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open navbar-nav">

                    <a href="index.php?page=dashboard" class="nav-link nav-item nav-dashboard">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=home" class="nav-link nav-item nav-home">
                        <i class="fa fa-home text-danger"></i>
                        <p>Home
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="index.php?page=mailbox" class="nav-link nav-item">
                        <i class="nav-icon far fa-envelope text-danger"></i>
                        <p>
                            Mailbox

                        </p>
                    </a>
                </li>



                <li class="nav-item">
                    <a href="index.php?page=donors" class="nav-link nav-item nav-donors">
                        <i class="fa fa-user-friends text-danger"></i>
                        <p> Blood Donors
                        </p>

                    </a>
                <li class="nav-item">
                    <a href="index.php?page=donations" class="nav-link nav-item nav-donations">
                        <i class="fa fa-tint text-danger"></i>
                        <p> Blood donations
                        </p>

                    </a>
                </li>

                <li class="nav-item">
                    <a href="index.php?page=requests" class="nav-link nav-item nav-requests">
                        <i class="fa fa-bed fa-lg text-danger"></i>
                        <p>Blood Request
                        </P>

                    </a>
                </li>
                <!--
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-users fa-lg text-success"></i>
                        <p>Active Donors</p>
                    </a>
                </li>
-->
                <li class="nav-item">
                    <a href="index.php?page=handedovers" class="nav-link nav-item nav-handedovers">
                        <i class="fa fa-toolbox text-danger"></i>
                        <p> Deliveries
                        </p>

                    </a>
                </li>




                <li class="nav-item">
                    <?php if ($_SESSION['login_type'] == 1) : ?>
                        <a href="index.php?page=users" class="nav-item nav-users">
                            <span class='icon-field'><i class="fa fa-users text-info"></i></span>
                            Users <i class="fa fa-cog fa-spin fa-1x fa-fw"></i>
                        </a>
                    <?php endif; ?>
                </li>
            </ul>




        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<script>
    $('.nav_collapse').click(function() {
        console.log($(this).attr('href'))
        $($(this).attr('href')).collapse()
    })
    $('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>