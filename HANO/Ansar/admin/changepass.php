<?php
require_once("includes/init.php");
if(!isset($_SESSION['id'])){
	$message->messg("Login to get access to this page");
	redirect_to("../login.php");
	
}

$id=$_SESSION['id'];
if(isset($_POST["chp"])){
	$p1 = $_POST['p1'];
	$p2 = $_POST['p2'];
	if(empty($p1) or empty($p2)){
		
		$message->messg("All Fields Required");
		redirect_back();
	}else{
		if($p1==$p2){
			
			$pass=md5($p1);
			$sql="UPDATE `users` SET `password` = '$pass' WHERE `users`.`id` = '$id'";
			$query=$mysqli->query($sql);
			$message->messg("Password Updated");
		redirect_back();
		}else{
			
			$message->messg("Passwords don't match");
		redirect_back();
		}
		
	}
		
}
?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ALAAMA | Change Password</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
     <link href="dist/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="dist/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
	  
	  
	  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <?php include("inc/header.php") ?>
      <!-- Left side column. contains the logo and sidebar -->
      <?php include("includes/side.php") ?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Admin Details
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
           
            <li class="active">Change Password</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
			  <?php $message->messg();  
			  ?>
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
               <div class="box-header">
                  
                </div>
                <!-- form start -->
                <form action="" enctype="multipart/form-data" method="post">
                  <div class="box-body">
						
					
					  
					  <div class="row">
					  
						 
						  <div class="col-md-8">
							
							<div class="form-group">
                      <label for="email">New Password</label>
                      <input type="password" name="p1" class="form-control" id="email"  value="">
                    </div>
						  </div> 
						  <div class="col-md-8">
						  <div class="form-group">
                      <label for="role">Confirm Password</label>
                      <input type="password" name="p2" class="form-control" id="role"  value="">
                    </div>
						  </div>
						  
						

					  </div>
					  
					  
                    
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
					  
					  <button type="submit" name="chp" class="btn btn-primary">Change Password</button>
					  
                    
                  </div>
                </form>
              </div><!-- /.box -->

              

            </div>
			  
			  
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include("inc/footer.php") ?>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
	    
  
  <script src="dist/js/jquery-ui.min.js" type="text/javascript"></script>

	<script>
		$("#imagefile").on("change",function(){
	var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("imagefile").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("imageloc").src = oFREvent.target.result;
        };
	
	});
		
		$( function() {
    $( ".datepicker" ).datepicker();
  } );
</script>
    
  </body>
</html>
