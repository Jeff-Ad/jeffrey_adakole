<?php
require_once('includes/init.php');
include('layouts/links.php');
include('layouts/top-navbar.php');

?>


<!-- Page breadcrumb -->
<section id="mu-page-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-page-breadcrumb-area">
                    <h2>Blog Archive</h2>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Blog Archive</li>
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
                            <div class="mu-course-container mu-blog-archive">
                                <div class="row">

                                <style>
	.img_blog{
		width: 300px;
        height: 300px;
	}
							</style>
                                <?php
                            $sql = "SELECT * FROM blog ORDER BY id DESC";
                            $query = $mysqli->query($sql);
                            while ($row = $query->fetch_assoc()){
								$content=strip_tags($row['content']);
                                $pid=$row['id'];
                            echo '<div class="col-md-6 col-sm-6">
                                <article class="mu-blog-single-item">
                                    <figure class="mu-blog-single-img">
                                        <img class="img_blog" src="'. $row['photo'].'" alt="img"></a>
                                        <figcaption class="mu-blog-caption">
                                            <h3><a href="#">'. $row['title'].'</a></h3>
                                        </figcaption>
                                    </figure>
                                    <div class="mu-blog-meta">
                                        <a href="#">'. $row['author'].'</a>
                                        <a href="#">'. $row['date'].'</a>
                                    </div>
                                    <div class="mu-blog-description">
                                        <p>'. $content.'</p>
                                        <a class="mu-read-more-btn" href="blog-single.php?id='.$pid.'">Read More</a>
                                    </div>
                                </article>
                            </div>';    
                            }
                            ?>
                                    
                                    
                                </div>
                            </div>
                            <!-- end course content container -->
                            <!-- start course pagination -->
                            <div class="mu-pagination">
                                <nav>
                                    <ul class="pagination">
                                        <li>
                                            <a href="#" aria-label="Previous">
                                                <span class="fa fa-angle-left"></span> Prev
                                            </a>
                                        </li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li>
                                            <a href="#" aria-label="Next">
                                                Next <span class="fa fa-angle-right"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- end course pagination -->
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