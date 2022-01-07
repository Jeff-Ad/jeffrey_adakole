<?php

include('includes/init.php');


$id=$_GET['id'];



$sql="SELECT * FROM blog WHERE id = '$id' ";
$query=$mysqli->query($sql);
$row=$query->fetch_assoc();
$id=$_GET['id'];





include('layouts/links.php');
include('layouts/top-navbar.php');







?>

<section id="mu-page-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-page-breadcrumb-area">
                    <h2>Blog Single</h2>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Blog Single</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End breadcrumb -->
<section id="mu-course-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-course-content-area">
                    <div class="row">
                        <div class="col-md-9">
                            <!-- start course content container -->
                          
                            
                           <div class="mu-course-container mu-blog-single">
                                <div class="row">
                                    <div class="col-md-12">
                                        <article class="mu-blog-single-item">
                                            <figure class="mu-blog-single-img">
                                                <a href="#"><img alt="img" src="<?php echo $row['photo'] ?>"></a>
                                                <figcaption class="mu-blog-caption">
                                                    <h3><a href="#"><?php echo $row['title'] ?></a></h3>
                                                </figcaption>
                                            </figure>
                                            <div class="mu-blog-meta">
                                                <a href="#"><?php echo $row['author'] ?></a>
                                                <a href="#"><?php echo $row['date'] ?></a>
                                                <span><i class="fa fa-comments-o"></i></span>
                                            </div>
                                            <div class="mu-blog-description">
                                                <p><?php echo $row['content'] ?></p>
                                                

                                            </div>
                                
                                        
                                            <!-- start blog post tags -->
                                            
                                            <!-- End blog post tags -->
                                            <!-- start blog social share -->
                                            <div class="mu-blog-social">
                                                <ul class="mu-news-social-nav">
                                                    <li>SOCIAL SHARE :</li>
                                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                                </ul>
                                            </div>
                                            <!-- End blog social share -->
                                        </article>
                                    </div>
                                </div>
                            </div>
                            <!-- end course content container -->
                            <!-- start blog navigation -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mu-blog-single-navigation">
                                        <a class="mu-blog-prev" href="#"><span class="fa fa-angle-left"></span>Prev</a>
                                        <a class="mu-blog-next" href="#">Next<span class="fa fa-angle-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end blog navigation -->

                            
                            
                        
                            <!-- start respond form -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div id="respond">
                                        <h3 class="reply-title">Leave a Comment</h3>
                                        <form id="commentform">
                                            <p class="comment-notes">
                                                Your email address will not be published. Required fields are marked <span class="required">*</span>
                                            </p>
                                            <p class="comment-form-author">
                                                <label for="author">Name <span class="required">*</span></label>
                                                <input type="text" required="required" size="30" value="" name="author">
                                            </p>
                                            <p class="comment-form-email">
                                                <label for="email">Email <span class="required">*</span></label>
                                                <input type="email" required="required" aria-required="true" value="" name="email">
                                            </p>
                                            <p class="comment-form-url">
                                                <label for="url">Website</label>
                                                <input type="url" value="" name="url">
                                            </p>
                                            <p class="comment-form-comment">
                                                <label for="comment">Comment</label>
                                                <textarea required="required" aria-required="true" rows="8" cols="45" name="comment"></textarea>
                                            </p>
                                            <p class="form-allowed-tags">
                                                You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: <code>&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;s&gt; &lt;strike&gt; &lt;strong&gt; </code>
                                            </p>
                                            <p class="form-submit">
                                                <input type="submit" value="Post Comment" class="mu-post-btn" name="submit">
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- end respond form -->
                        </div>
                        <div class="col-md-3">
                            <!-- start sidebar -->
                            <aside class="mu-sidebar">
                                <!-- start single sidebar -->
                                
                                
                                <!-- start single sidebar -->
                                <div class="mu-single-sidebar">
                                    <h3>Archives</h3>
                                    <ul class="mu-sidebar-catg mu-sidebar-archives">
                                        <li><a href="#">May <span>(25)</span></a></li>
                                        <li><a href="">June <span>(35)</span></a></li>
                                        <li><a href="">July <span>(20)</span></a></li>
                                        <li><a href="">August <span>(125)</span></a></li>
                                        <li><a href="">September <span>(45)</span></a></li>
                                        <li><a href="">October <span>(85)</span></a></li>
                                    </ul>
                                </div>
                                <!-- end single sidebar -->
                                <!-- start single sidebar -->
                                <div class="mu-single-sidebar">
                                    <h3>Tags Cloud</h3>
                                    <div class="tag-cloud">
                                        <a href="#">Health</a>
                                        <a href="#">Science</a>
                                        <a href="#">Sports</a>
                                        <a href="#">Mathematics</a>
                                        <a href="#">Web Design</a>
                                        <a href="#">Admission</a>
                                        <a href="#">History</a>
                                        <a href="#">Environment</a>
                                    </div>
                                </div>
                                <!-- end single sidebar -->
                            </aside>
                            <!-- / end sidebar -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php


include('layouts/footer.php');
include('layouts/scripts.php');

?>