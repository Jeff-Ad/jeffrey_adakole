<?php
session_start();
error_reporting(0);
ini_set('display_errors', '1');
include('layout/db_connect.php');
include('layout/links.php');
include('layout/header.php');
include('layout/top_nav.php');
?>
<section id="breadcrumbs" class="breadcrumbs col-md-12">
  <div class="container ">

    <div class="d-flex justify-content-between align-items-center">
      <h1 class="text-primary">About
        <small>Blood Bank</small>
      </h1>
      <ol>
        <li><a href="index.php">Home</a></li>
        <li>About</li>
      </ol>
    </div>

  </div>
</section>
<!-- Page Content -->
<div class="container" style="margin-top:70px;">
  <!-- Page Heading/Breadcrumbs -->
  <div class="row">
    <div class="col-lg-12">

    </div>
  </div>
  <!-- /.row -->

  <!-- Intro Content -->
  <div class="row">
    <div class="col-md-6">
      <img class="img-responsive" src="mbbb.jpg" alt="">
    </div>
    <div class="col-md-6">
      <h2 class="text-primary ">About Blood Bank</h2>
      <p class="text">Blood banking is the process that takes place in the laboratory to ensure that donated blood, or blood products, are safe before they are used in blood transfusions and other medical procedures. Blood banking includes typing the blood for transfusion and testing for infectious diseases.The term "blood bank" typically refers to a division of a hospital where the storage of blood product occurs and where proper testing is performed (to reduce the risk of transfusion related adverse events). However, it sometimes refers to a collection center, and indeed some hospitals also perform collection.
      </p>
    </div>
  </div>
  <!-- /.row -->


  <hr>


</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>


<?php include "layout/scripts.php"; ?>

<?php include "layout/footer.php"; ?>