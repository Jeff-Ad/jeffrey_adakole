<style>
  .logo {
    margin: auto;
    font-size: 20px;
    background: white;
    padding: 7px 11px;
    border-radius: 50% 50%;
    color: #000000b3;
  }
</style>

<!DOCTYPE html>
<html lang="en">


<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark bg-primary fixed-top navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars text-white"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.php" class="nav-link text-white"><i class="fas fa-home"></i>Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block bg-danger">
          <a href="#" class="nav-link">
            <p id="dateAndTime"><?php
                                $date = date_create("");
                                echo date_format($date, "D-M-Y h:i:sa") ?></p>
          </a>
        </li>
      </ul>

      <!-- SEARCH FORM -->
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Administration -->

        <div class="container-fluid mt-2 mb-2">
          <div class="col-lg-12">
            <div class="col-md-1 float-left" style="display: flex;">
              <div class="float-right">
                <div class=" dropdown mr-4">
                  <a href="#" class="text-white dropdown-toggle" id="account_settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['login_name'] ?> </a>
                  <div class="dropdown-menu" aria-labelledby="account_settings" style="left: -2.5em;">
                    <a class="dropdown-item" href="javascript:void(0)" id="manage_my_account"><i class="fa fa-cog"></i> Manage Account</a>
                    <a class="dropdown-item" href="ajax.php?action=logout"><i class="fa fa-power-off"></i> Logout</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



      </ul>
    </nav>





    <script>
      $('#manage_my_account').click(function() {
        uni_modal("Manage Account", "manage_user.php?id=<?php echo $_SESSION['login_id'] ?>&mtype=own")
      })
    </script>