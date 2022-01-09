<?php
session_start();
error_reporting(0);
ini_set('display_errors', '1');
include('layout/db_connect.php');
include('layout/links.php');
include('layout/header.php');
include('layout/top_nav.php');
?>

<?php include "top_nav.php"; ?>
<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url('images/s1.jpg');"></div>
            <div class="carousel-caption">

            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('images/s2.jpg');"></div>
            <div class="carousel-caption">

            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('images/s3.jpg');"></div>
            <div class="carousel-caption">

            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>

<!-- Page Content -->
<div class="container">

    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-primary">
                Online Blood Bank Management System
            </h1>
        </div>
        <div class="col-md-4">
            <div class="card-primary">
                <div class="card-heading">
                    <h4><i class="fa fa-fw fa-user"></i> Donor Registration</h4>
                </div>
                <div class="card-body">
                    <p>Have you at anytime witnessed a relative of yours or a close friend searching frantically for a blood donor, when blood banks say out of stock, the donors in mind are out of reach and the time keeps ticking?This thought laid our foundation. </p>
                    <a href="Donor_reg.php" class="btn btn-primary">View More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-primary">
                <div class="card-heading">
                    <h4><i class="fa fa-fw fa-medkit"></i> Need Blood</h4>
                </div>
                <div class="card-body">
                    <p>Every 2 seconds someone needs blood. Your blood helps more than one life at a time. Accident victims, premature babies, patients undergoing major surgeries require whole blood, where your blood after testing is used directly. </p>
                    <a href="request_blood.php" class="btn btn-primary">View More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-primary">
                <div class="card-heading">
                    <h4><i class="fa fa-fw fa-search"></i>Search Donor</h4>
                </div>
                <div class="card-body">
                    <p>Some people who have serious injuries they need blood transfusions to replace blood lost during the injury.Regular blood donors ensure that a safe and plentiful supply of blood is available whenever and wherever it is needed.</p>
                    <a href="Search_Donor.php" class="btn btn-primary">View More</a>
                </div>
            </div>
        </div>

    </div>
    <!-- /.row -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header  text-primary">Blood Donor Camps</h2>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="#">
                        <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p1.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="#">
                        <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p2.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="#">
                        <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p3.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="#">
                        <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p4.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="#">
                        <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p5.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="#">
                        <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p6.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include "layout/scripts.php"; ?>

<!-- /.row -->
<!-- jQuery --
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })

    $(".img-portfolio").click(function() {
        var a = $(this).attr("src");
        $("#ModalImg").attr("src", a);
        $('#myModal').modal();
    })
</script>

<!-- Footer -->
<?php include "layout/footer.php"; ?>