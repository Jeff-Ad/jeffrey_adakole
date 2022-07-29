<?php
require_once('includes/init.php');
include('layouts/links.php');
include('layouts/top-navbar.php');

?>
  <!-- End search box -->
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>404</h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active">404</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->

  <!-- Start error section  -->
  <section id="mu-error">
    <div class="container">
      <div class="row">
       <div class="col-md-12">
          <div class="mu-error-area">
            <p>Oops! The page you requested is in progress!</p>
            <span>The page you are looking for is under contruction and is not available at the moment.</span>
            <h2>404</h2>
            <a class="mu-post-btn" href="index.php">GO TO HOME</a>
          </div>
        </div>
      </div>
    </div>
  </section>
 <!-- End error section  -->
 

 <?php


include('layouts/footer.php');
include('layouts/scripts.php');

?>