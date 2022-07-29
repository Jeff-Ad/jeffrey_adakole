<?php
require_once("includes/init.php");
if(!isset($_SESSION['id'])){
	$message->messg("Login to get access to this page");
	redirect_to("../login.php");
	
}




if(isset($_POST['add'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$role = $_POST['role'];
	$pass = $_POST['pass'];
	
	
	
	if(empty($name) or empty($email) or empty($role) or empty($pass)){
			
			
				$message->messg("All Fields Required");
				redirect_back();
				}
      else{
      
        $pass=md5($pass);
	
	$sql="INSERT INTO `users`(`id`, `name`, `email`, `role`, `password`) VALUES (NULL, '$name', '$email', '$role', '$pass')";
	//echo $sql;
	$query=$mysqli->query($sql);
	//echo $sql;
	if($mysqli->affected_rows>0){
	
		$message->messg("User Added");
		redirect_to("viewadmin.php");
	  }
  } 
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ALAAMA | Add User</title>
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
           
            <li class="active">Add User</li>
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
					  
						  
						  <div class="col-md-6">
						  <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="">
                    	</div>
							</div>
						  <div class="col-md-6">
							
							<div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" name="email" class="form-control" id="email" placeholder="Email Address" value="">
                    </div>
						  </div> 
						  <div class="col-md-6">
						  <div class="form-group">
                      <label for="role">Role</label>
                      <input type="text" name="role" class="form-control" id="role" placeholder="Role" value="">
                    </div>
						  </div>
						  <div class="col-md-6">
						  
							<div class="form-group">
                      <label for="pass">Password</label>
                      <input type="text" name="pass" class="form-control" id="pass" placeholder="Password" value="">
                    </div>
						  </div>
						   
						  




					  </div>
					  
					  
					 
                   
                    
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
					  
					  <button type="submit" name="add" class="btn btn-primary">Add Staff</button>
					  
                    
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
