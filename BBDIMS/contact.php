<?php
session_start();
error_reporting(0);
ini_set('display_errors', '1');
include('layout/db_connect.php');
include('layout/links.php');
include('layout/header.php');
include('layout/top_nav.php');
?>

<!-- Page Content -->


<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs" style='margin-top:40px;'>
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Contact</h2>
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li>Contact</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div>

                <iframe src=" https://www.google.com/maps/dir/6.5480551,3.2839596/futminna+location/
                    @8.0644806,2.943533,7z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x104c7107fcda5791:
                    0xb371b8801b35c6db!2m2!1d6.5463156!2d9.5835546" width="100%" height="270" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


            </div>

            <?php
            if (isset($_POST["submit"])) {
                $sql = "INSERT INTO messages (name, contact, email, message, status,logs) VALUES ('{$_POST["name"]}', '{$_POST["phone"]}', '{$_POST["email"]}', '{$_POST["message"]}', 1,NOW());";
                if ($conn->query($sql)) {
                    echo '
					<div class="alert alert-success">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>Success!</strong> Your message has been Successfully sent.
					</div>
					
					
					';
                }
            }
            ?>
            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map text-danger"></i>
                            <h4>Location:</h4>
                            <p>Railway Station Road., Minna South, Minna</p>
                        </div>

                        <div class="email">
                            <i class="icofont-envelope text-danger"></i>
                            <h4>Email:</h4>
                            <p>generalhospital@minna.com</p>
                        </div>

                        <div class="phone">
                            <i class="icofont-phone text-danger"></i>
                            <h4>Call:</h4>
                            <p>+234 706 6163 175</p>
                        </div>

                    </div>

                </div>







                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form method="post" action="contact.php" role="form" class="php-email-form">

                        <div class="control-group form-group col-md-6">
                            <div class="controls  form-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group col-md-6">
                            <div class="controls  ">
                                <input type="tel" class="form-control" name="phone" placeholder="Your Phone Number" data-rule="minlen:11" data-msg="Please enter at least 4 chars" required>
                            </div>
                        </div>

                        <div class="control-group form-group">
                            <div class="controls col-md-12 form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls col-md-12 form-group">
                                <textarea rows="5" cols="100" class="form-control" name="message" required maxlength="999" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div id="success"></div>
                        <!-- For success/fail messages -->
                        <div class="text-center"><button type="submit" name="submit" class=""> Send Message</button></div>
                    </form>

                </div>
            </div>



        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<hr>


</div>

<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>



</ <?php include('layout/footer.php'); ?>