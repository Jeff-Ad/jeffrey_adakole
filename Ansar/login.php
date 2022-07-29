<?php 
require_once("includes/init.php");
include('layouts/links.php');

if(isset($_SESSION['id'])){
	redirect_to("admin/index.php");
}
    

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = md5(mysql_prep($_POST['password']));
        $sql = "SELECT * FROM `users` WHERE `email` = '$email' && `password` = '$password'";
        $query = $mysqli->query($sql);
        if($query->num_rows>0){
			$row=$query->fetch_assoc();
			$_SESSION['id']=$row['id'];
            $_SESSION['role']=$row['role'];        
            redirect_to("admin/index.php");
      
        }
        
        else{
            $message->messg("Invalid details");
            redirect_back();
            }
     
       }
   
    
?>


<!-- Page breadcrumb -->
<section id="mu-page-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-page-breadcrumb-area">
                    <h2>LOGIN</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.php">HOME</a></li>
                        <li class="active">ADMIN</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End breadcrumb -->

<!-- Start contact  -->
<section id="mu-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-contact-area">
                    
                    <div class="mu-contact-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mu-contact-left">
                                    <?php $message->messg(); ?>
                                    <form class="contactform" method="POST">
                                        
                                        <p class="comment-form-email">
                                            <label for="email">Email <span class="required">*</span></label>
                                            <input type="text" required="required" aria-required="true" value="" name="email">
                                        </p>

                                        <p class="comment-form-author">
                                            <label for="author">Password <span class="required">*</span></label>
                                            <input type="password" required="required" size="30" value="" name="password">
                                        </p>
                                        
                                        
                                        <p class="form-submit">
                                            <input type="submit" value="Login" class="mu-post-btn" name="submit">
                                        </p>
                                    </form>
                                    <div class="col-xs-8">    
              <div class="checkbox icheck">
                <label>
                  <a href= "recovery.php" >Forgot Password</a>
                </label>
              </div>                        
            </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mu-contact-right">
                                    <img src="" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end contact content -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End contact  -->




<?php


include('layouts/footer.php');
include('layouts/scripts.php');

?>