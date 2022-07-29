<?php
require_once('includes/init.php');
include('layouts/links.php');
include('layouts/top-navbar.php');

?>






<!-- Start Slider -->
<section id="mu-slider">
    <!-- Start single slider item -->


<?php
    $sql = "SELECT * FROM slider ORDER BY id DESC LiMIT 3";
$query = $mysqli->query($sql);
while($row = $query->fetch_assoc()){

    echo 
        '
    <div class="mu-slider-single">
        <div class="mu-slider-img">
            
            <figure>
                <img src="'.$row['photo'].'" alt="img">
            </figure>
        </div>        
<div class="mu-slider-content">
            <h4>Welcome To Our School</h4>
            <span></span>
            <h2>'.$row['title'].'</h2>
            <p>'.$row['content'].'</p>
            
        </div>';

            }       
        ?>
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    
    <!-- Start single slider item -->
</section>
<!-- End Slider -->
<!-- Start service  -->
<section id="mu-service">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="mu-service-area">
                    <!-- Start single service -->
                    <div class="mu-service-single">
                        <span class="fa fa-book"></span>
                        <h3>Vision</h3>
                        <p>To provide world-class education and prepare our pupils for success in this life and the hereafter.</p>
                    </div>
                    <!-- Start single service -->
                    <!-- Start single service -->
                    <div class="mu-service-single">
                        <span class="fa fa-users"></span>
                        <h3>Mission</h3>
                        <p>We commit ourselves to stimulating the intellectual, spiritual, moral, emotional and physical development of our pupils to bring 
                            the best out of them and to make them engineers of change in the society and make them upright citizens who fear Allah SWT in all their affairs.
                        </p>
                    </div>
                    <!-- Start single service -->
                    <!-- Start single service -->
                    <div class="mu-service-single">
                        <span class="fa fa-table"></span>
                        <h3>Motto</h3>
                        <p>Inspiring for excellence</p></span>
                        <p>.........................................</p>
                        
                    </div>
                    <!-- Start single service -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End service  -->
<p>________________________________________________________________________________________________________________________________________________________</p>
<!-- Start about us -->
<section id="mu-about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-about-us-area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="mu-about-us-left">
                                <!-- Start Title -->
                                <div class="mu-title">
                                    <h2>You are Welcome to our school</h2>
                                </div>
                                <div class="mu-title">
                                    <h3>Assalamu alaikum warahmatullahi wabarakatuhu. </h3>
                                </div>
                                <!-- End Title -->
                                <p>We are pleased to welcome you and your child to Al-Ansar
                                    Academy.
                                    We are very proud of our school and the goals we have set out
                                    to achieve particularly in helping our pupils fulfil their potentials in
                                    attaining success in this dynamic world and in the hereafter,
                                    Insha Allah.</p>
                                <p> We have a beautiful and comfortable serene environment
                                    to simplify learning for your child. </p>
                                <p> We are confident your child will feel at home here at Al-Ansar
                                    and we look forward to meeting you.
                                </p>

                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="mu-about-us-right">
                                <!-- Start Title -->
                                <img src="assets/img/slide/slide-1.jpg" alt="img">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End about us -->


<!-- Start about us counter -->
<section id="mu-abtus-counter">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-abtus-counter-area">
                    <?php
                $sql="SELECT * FROM facility WHERE id='1'";
                $query=$mysqli->query($sql);
                $row=$query->fetch_assoc();

                    ?>
                    <div class="row">
                        <!-- Start counter item -->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="mu-abtus-counter-single">
                                <span class="fa fa-book"></span>
                                <h4 class="counter"><?php echo $row['subjects'] ?></h4>
                                <p>Subjects</p>
                            </div>
                        </div>
                        <!-- End counter item -->
                        <!-- Start counter item -->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="mu-abtus-counter-single">
                                <span class="fa fa-users"></span>
                                <h4 class="counter"><?php echo $row['students'] ?></h4>
                                <p>Students</p>
                            </div>
                        </div>
                        <!-- End counter item -->
                        <!-- Start counter item -->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="mu-abtus-counter-single">
                                <span class="fa fa-flask"></span>
                                <h4 class="counter"><?php echo $row['labs'] ?></h4>
                                <p>Modern Lab</p>
                            </div>
                        </div>
                        <!-- End counter item -->
                        <!-- Start counter item -->
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <div class="mu-abtus-counter-single no-border">
                                <span class="fa fa-user-secret"></span>
                                <h4 class="counter"><?php echo $row['teachers'] ?></h4>
                                <p>Teachers</p>
                            </div>
                        </div>
                        <!-- End counter item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End about us counter -->

<!-- ======= Founder======= -->
<section id="mu-featuresf">
    <div class="container" data-aos="fade-up">


        <div class="container-fluid milk pb-5">
            <div class="container p-5">
                <div class="row">
                    <div class="col-lg-7 d-flex">
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="w-100 pt-2">

                                <div class="member" data-aos="fade-up" data-aos-delay="200">
                                    <div class="member-img">
                                        <div class="w-100 pt-2">
                                            <img src="assets/img/founder.jpg" alt="" class="d-block" style="max-width: 180px;">
                                        </div>
                                        <div class="social">
                                            <a href=""><i class="bi bi-twitter"></i></a>
                                            <a href=""><i class="bi bi-facebook"></i></a>
                                            <a href=""><i class="bi bi-instagram"></i></a>
                                            <a href=""><i class="bi bi-linkedin"></i></a>
                                        </div>
                                    </div>
                                    <div class="member-info">
                                        <h4>Dr. M.K Dikwa </h4>
                                        <span>CEO/Founder</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex-grow-1 px-2">
                            <h3 class="text-color teko m-0 pt-2 text-color">Welcome Message From the Founder</h3>
                            <p>I am delighted to welcome you to a new and exciting school in the city of Maiduguri, Borno State. </p>
                            <p>First and foremost, I wish to thank the Almighty Allah for giving us the opportunity to serve our
                                community through the establishment of this highly rated school here in Maiduguri. Al-Ansar is
                                clearly a school
                                where the desire to learn is contagious and students of all ability flourish because
                                everyone works
                                hard to create a learning environment where everybody is welcome and diversity is celebrated.
                            </p>
                            <a href="admission.php" class="appointment-btn scrollto"><span>Read More</a></span>
                        </div>
                    </div>
                    <div class="col-lg-5 pt-4 pt-lg-0 content" data-aos="fade-left">


                        <div class="col-lg-6">
                            <iframe height="315" src="https://www.youtube.com/embed/EZAkP8jP5fY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="w-100"></iframe>
                        </div>

                    </div>


                </div>
</section><!-- End About Us Section -->

<section id="mu-features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                
            </div>
        </div>
    </div>
</section>
<!-- End features section -->

<!-- Start latest course section -->


<!-- Start our teacher -->
<section id="mu-our-teacher">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-our-teacher-area">
                    <!-- begain title -->
                    <div class="mu-titlef">
                        <h2>Our Teachers</h2>
                        
                    </div>
                    <!-- end title -->
                    <!-- begain our teacher content -->
                    <?php
                            $sql = "SELECT * FROM teacher ORDER BY id DESC LIMIT 4";
                            $query = $mysqli->query($sql);
                            while ($row = $query->fetch_assoc()){

                                $pid =$row['id'];


                   echo '<div class="mu-our-teacher-content">
                        <div class="row">
                            <div class="col-lg-3 col-md-3  col-sm-6">
                                <div class="mu-our-teacher-single">
                                    <figure class="mu-our-teacher-img">
                                        <img src="'. $row['photo'].'" alt="teacher img">
                                        <div class="mu-our-teacher-social">
                                            <a href="#"><span class="fa fa-facebook"></span></a>
                                            <a href="#"><span class="fa fa-twitter"></span></a>
                                            <a href="#"><span class="fa fa-linkedin"></span></a>
                                            <a href="#"><span class="fa fa-google-plus"></span></a>
                                        </div>
                                    </figure>
                                    <div class="mu-ourteacher-single-content">
                                        <h4>'.$row['name'].'</h4>
                                        <span>'.$row['subject'].'</span>
                                        
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>';
                            }
                        ?>
                            
                            
                            
                        
                    <!-- End our teacher content -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End our teacher -->


<!-- Start testimonial -->
<section id="mu-testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-testimonial-area">
                    <div id="mu-testimonial-slide" class="mu-testimonial-content">

                    
                        <!-- start testimonial single item -->
                        <div class="mu-testimonial-item">
                            <div class="mu-testimonial-quote">
                                <blockquote>
                                    <p>Education is the passport to the future, for tomorrow belongs to those who prepare for it today.</p>
                                </blockquote>
                            </div>
                            <div class="mu-testimonial-img">
                                <img src="assets/img/testimonial-1.png" alt="img">
                            </div>
                            <div class="mu-testimonial-info">
                                <h4>Malcom X</h4>
                                
                            </div>
                        </div>
                        <!-- end testimonial single item -->
                        <!-- start testimonial single item -->
                        <div class="mu-testimonial-item">
                            <div class="mu-testimonial-quote">
                                <blockquote>
                                    <p>The more that you read, the more things you will know, the more that you lear, the more places you'll go.</p>
                                </blockquote>
                            </div>
                            <div class="mu-testimonial-img">
                                <img src="assets/img/testimonial-3.png" alt="img">
                            </div>
                            <div class="mu-testimonial-info">
                                <h4>Dr.Seuss</h4>
                                
                            </div>
                        </div>
                        <!-- end testimonial single item -->
                        <!-- start testimonial single item -->
                        <div class="mu-testimonial-item">
                            <div class="mu-testimonial-quote">
                                <blockquote>
                                    <p>Knowledge is power.
                                     Information is liberating.
                                     Education is the premise of progress, in every society, in every family.</p>
                                </blockquote>
                            </div>
                            <div class="mu-testimonial-img">
                                <img src="assets/img/testimonial-2.png" alt="img">
                            </div>
                            <div class="mu-testimonial-info">
                                <h4>Kofi Annan</h4>
                                
                            </div>
                        </div>
                        <!-- end testimonial single item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End testimonial -->

<!-- Start from blog -->
<section id="mu-from-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-from-blog-area">
                    <!-- start title -->
                    <div class="mu-titlef">
                        <h2>Latest Events</h2>
                        <div class="mu-from-blog-content">
                                <div class="row">
						
                            <style>
                                 .img{
                                    width: 260px;
                                    height: 265px;
                                    }
							</style>

                                <?php
                            $sql = "SELECT * FROM blog ORDER BY id DESC LIMIT 4";
                            $query = $mysqli->query($sql);
                            while ($row = $query->fetch_assoc()){

                               
								$content=strip_tags($row['content']);
                                if(strlen($content)>40){$content=substr($content,0,40)."...";}
                                //$pid = $_GET['id'];
                            echo '<form action="" enctype="multipart/form-data" method="post">
                                <div class="col-md-4 col-sm-4">
                                    <article class="mu-blog-single-item">
                                        <figure class="mu-blog-single-img">
                                            <img class="img" src="'. $row['photo'].'" alt="img"></a>
                                            <figcaption class="mu-blog-caption">
                                                <h3><a href="blog-single.php?id=$id" target=\"_blank\">'. $row['title'].'</a></h3>
                                            </figcaption>
                                        </figure>
                                        <div class="mu-blog-meta">
                                            
                                           
                                        </div>
                                        <div class="mu-blog-description">
                                            <p>'. $row['date'].'</p>
                                            <a class="mu-read-more-btn" href="blog-single.php?id='.$row['id'].';" target=\"_blank\" >Read More</a>
                                            
                                        </div>
                                    </article>
                                </div>
                                </form>
                                ';    
                            }
                            ?>
                            </div>
                            </div>

                            
                            
                       
                    <!-- end from blog content   -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End from blog -->

<?php


include('layouts/footer.php');
include('layouts/scripts.php');

?>