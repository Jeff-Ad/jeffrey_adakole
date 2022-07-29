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
                    <h2>Gallery</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Gallery</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End breadcrumb -->
<!-- Start gallery  -->
<section id="mu-gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-gallery-area">
                    <!-- start title -->
                    <div class="mu-titlef">
                        <h2>Some Moments</h2>
                        
                    </div>
                    <!-- end title -->
                    <!-- start gallery content -->
                    <div class="mu-gallery-content">
                        <!-- Start gallery menu -->
                        <div class="mu-gallery-top">
                            <ul>
                                <li class="filter active" data-filter="all">All</li>
                                <li class="filter" data-filter=".lab">Lab</li>
                                <li class="filter" data-filter=".classroom">Class Room</li>
                                <li class="filter" data-filter=".library">Library</li>
                                <li class="filter" data-filter=".cafe">Cafe</li>
                                <li class="filter" data-filter=".others">Others</li>
                            </ul>
                        </div>
                        <!-- End gallery menu -->
                        <div class="mu-gallery-body">
                            <ul id="mixit-container" class="row">
                                
                                <!-- start single gallery image -->
                                <?php  

                                    $sql = "SELECT * FROM gallery ORDER BY ID DESC";
                                    $query = $mysqli->query($sql);
                                    while ($row = $query->fetch_assoc()){
                                        $iid =$row['id'];


                                      echo '  <li class="col-md-4 col-sm-6 col-xs-12 mix all library cafe others sports lab classroom">
                                        <div class="mu-single-gallery">
                                            <div class="mu-single-gallery-item">
                                                <div class="mu-single-gallery-img">
                                                    <a href="#"><img alt="img" src=' .$row['photo']. '></a>
                                                </div>
                                                <div class="mu-single-gallery-info">
                                                    <div class="mu-single-gallery-info-inner">
                                                        <h4>Image Title</h4>
                                                        <p>'.$row['name']. '</p>
                                                        <a href=' .$row['photo']. ' data-fancybox-group="gallery" class="fancybox"><span class="fa fa-eye"></span></a>
                                                        <a href="#" class="aa-link"><span class="fa fa-link"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>';


                                    }


                                ?>
                                
                                <!-- start single gallery image -->
                                
                                <!-- start single gallery image -->
                               
                                <!-- start single gallery image -->
                                
                                <!-- start single gallery image -->
                                
                                <!-- start single gallery image -->
                               
                                <!-- start single gallery image -->
                                
                            </ul>
                        </div>
                    </div>
                    <!-- end gallery content -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End gallery  -->




<?php


include('layouts/footer.php');
include('layouts/scripts.php');

?>