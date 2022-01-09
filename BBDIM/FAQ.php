<?php

include("layout/links.php");

error_reporting(0); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include("layout/header.php"); ?>
</head>

<body>

  <?php
  include("layout/top_nav.php");
  include("layout/db_connect.php");
  ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs" style='margin-top:40px;'>
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2 class="text-primary"><i class="bx bx-help-circle text-danger"></i>F.A.Q</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>F.A.Q</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->



    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </div>

        <div class="row faq-item d-flex align-items-stretch">
          <div class="col-lg-5">
            <i class="bx bx-help-circle text-danger"></i>
            <h4 class="text text-info">General Blood & Platelet Donor Guidelines..
              Importance..</h4>
          </div>
          <div class="col-lg-7">
            <p class="text">
              Donor eligibility rules help to protect the health and safety of the donor as well as the person who will receive a blood transfusion. The general guidelines listed below will help you determine if you are eligible to donate blood or platelets
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch">
          <div class="col-lg-5">
            <i class="bx bx-help-circle text-danger"></i>
            <h4 class="text text-info">The Importance of you and your donation..</h4>
          </div>
          <div class="col-lg-7">
            <p class="text">
              Before donating, one of our medical professionals will discuss your health history with you in a private, confidential setting. After taking your pulse, blood pressure, and temperature and checking for anemia, we will determine whether you are eligible to be a donor.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch">
          <div class="col-lg-5">
            <i class="bx bx-help-circle text-danger"></i>
            <h4 class="text text-info">General Guidelines..</h4>
          </div>
          <div class="col-lg-7">
            <p class="text">
              To donate blood or platelets, you must be in good general health, weigh at least 110 pounds, and be at least 16 years old. Parental consent is required for blood donation by 16 year olds; 16 year olds are NOT eligible to donate platelets. No parental consent is required for those who are at least 17 years old. If you are 76 or older, you will need your doctor’s written approval for blood or platelet donation.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->


      </div>
    </section><!-- End Frequently Asked Questions Section -->

  </main><!-- End #main -->
  <?php include("layout/footer.php"); ?>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>