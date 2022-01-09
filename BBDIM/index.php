<?php
session_start();
error_reporting(0);
ini_set('display_errors', '1');
include('layout/db_connect.php');
include('layout/links.php');
include('layout/header.php');
include('layout/top_nav.php');
?>
<!-- ======= Hero Section ======= -->
<section id="hero">
  <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>



    <div class="carousel-inner" role="listbox">

      <header id="myCarousel" class="carousel slide">

        <!-- Wrapper for slides -->
        <div id="hero" class="carousel-inner">
          <div class="item active">
            <div class="fill" style="background-image:url('images/indx.jpg');">

              <div class="carousel-container">
                <div class="container">
                  <h2 class="animate__animated animate__fadeInDown">Welcome to <span class="text-info">Digital <span class="text-danger">Blood Banking</span></span></h2>

                  <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Powered by General Hospital Minna, Niger state.</a>
                </div>

              </div>
            </div>

            <div class="carousel-caption">

            </div>
          </div>
          <div class="item">
            <div class="fill" style="background-image:url('images/bloodr.jpg');">
              <div class="carousel-container">
                <div class="container">
                  <h2 class="animate__animated animate__fadeInDown">What is Blood?</h2>
                  <p class="animate__animated animate__fadeInUp text-bold">Blood is essential to life. Blood circulates through our body and delivers essential substances like oxygen and nutrients to the body’s cells. It also transports metabolic waste products away from those same cells. There is no substitute for blood.</p>
                  <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Scroll down to learn more!</a>
                </div>
              </div>
            </div>

            <div class="carousel-caption">

            </div>
          </div>
          <div class="item">
            <div class="fill" style="background-image:url('images/s1.jpg');">

            </div>
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
      <!-- Indicators -->

    </div>
  </div>
</section>

<!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="row content">
        <div class="col-lg-6">
          <h2 class="bg-danger text-white">What is Blood?</h2>

          <p class="text">
            Blood is essential to life. Blood circulates through our body and delivers essential
            substances like oxygen and nutrients to the body’s cells.
            It also transports metabolic waste products away from those same cells.
            There is no substitute for blood.
            It cannot be made or manufactured.
            Generous blood donors are the only source of blood for patients in need of a blood transfusion.
          </p>

          <br />
          <h3 class="bg-info text-white text">Blood Components</h3>
          <p class="text">
            There are four basic components that comprise human blood: plasma, red blood cells,
            white blood cells and platelets.
          </p>
          <img class="img-responsive" src="images/components.png" alt="">

          <p class="text">
            <span class="text-info">Red Blood Cells</span> represent 40%-45% of your blood volume. They are generated from your bone marrow at a rate of four to five billion per hour. They have a lifecycle of about 120 days in the body.
          </p>

          <p class="text">
            <span class="bg-white text-info"> Platelets</span> are an amazing part of your blood. Platelets are the smallest of our blood cells and literally look like small plates in their non-active form. Platelets control bleeding. Wherever a wound occurs, the blood vessel will send out a signal. Platelets receive that signal and travel to the area and transform into their “active” formation, growing long tentacles to make contact with the vessel and form clusters to plug the wound until it heals.
          </p>

          <p class="text">
            <span class="bg-white text-info">Plasma</span> is the liquid portion of your blood. Plasma is yellowish in color and is made up mostly of water, but it also contains proteins, sugars, hormones and salts. It transports water and nutrients to your body’s tissues.
          </p>

          <p class="text">
            <span class="bg-white text-info"> White Blood Cells</span> Although white blood cells (leukocytes) only account for about 1% of your blood, they are very important.
            White blood cells are essential for good health and protection against illness and disease.
            Like red blood cells, they are constantly being generated from your bone marrow. They flow through the bloodstream and attack foreign bodies, like viruses and bacteria.They can even leave the bloodstream to extend the fight into tissue.
          </p>

        </div>
        <div class="col-lg-6 pt-4 pt-lg-0">
          <h2 class="bg-danger text-white">About Blood Types</h2>
          <p class="text">Your blood type is inherited and everyone’s blood type falls into one of eight types.
            The below chart shows the percentage of the population that has each blood type.</p>
          <img class="img-responsive" src="images/bloodperc.png" alt=""><br>
          <p class="text"> Type matters when it comes to blood transfusions. There are very specific ways in which blood types and blood components must be matched for a safe transfusion.
            This is why it is important that you Target Your Type® with the best donation method for you.</p>
          <img class="img-responsive" src="images/bloodcompatibility.png" alt=""><br>
        </div>
      </div>

    </div>
  </section>
  <!-- End About Section -->


</main><!-- End #main -->

<!-- Features Section -->


<script>
  $('.carousel').carousel({
    interval: 2000 //changes the speed
  })

  $(".img-portfolio").click(function() {
    var a = $(this).attr("src");
    $("#ModalImg").attr("src", a);
    $('#myModal').modal();
  })
</script>
<?php include "layout/scripts.php"; ?>

<!-- /.container -->


</body>

</html>



<!-- Footer -->
<?php include "layout/footer.php"; ?>