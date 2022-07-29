<?php
require_once("includes/init.php");
if(!isset($_SESSION['id'])){
	$message->messg("Login to get access to this page");
	redirect_to("../login.php");
	
}
$role=$_SESSION['role'];//role of the user logged in Admin or normal staff



if(isset($_POST['upload'])){
	
$name= mysql_prep($_POST['name']);
$file= $_FILES['file'];
$time=strtotime("now");
if($file['error']!=0){$message->messg("Invalid File, Make sure file is not more than 5Mb");redirect_back();}
//elseif($file['type']!='application/pdf'){$message->messg("File Not A valid PDF");redirect_back();}
else{


      $file_name=($file['name']);	
      $temp=$file['tmp_name'];
      //$time=strtotime("now");
      $link="../photo/".$time.$file_name;
      $loc2="photo/".$time.$file_name;
    
    if(move_uploaded_file($temp,$link)){
              
      $sql="INSERT INTO `gallery` (`id`, `name`, `photo`) VALUES (NULL, '$name', '$loc2')";
      $query=$mysqli->query($sql);
      if($mysqli->affected_rows>0){
                  
      $message->messg("Image Uploaded Successfully");}
                  else{$message->messg("Failed to upload Image...Please retry");}
                  redirect_back();
                }
    }




//echo $sql;
//echo $sql;

  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ALAAMA | Add Photo</title>
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
            Add Photo
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
           
            <li class="active">Add  Photo</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
			  
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
               <div class="box-header">
				   <style>
					   #alert{
						   color: red;
					   }
				   </style>
                  <h3 class="box-title"> File</h3>
                </div>
                <!-- form start -->
                <form action="" enctype="multipart/form-data" method="post">
                  <div class="box-body">
						
					 
            <span class="label-danger">Note: Image should be in PDF, PNG, JPEG format</span>
					  <?php $message->messg();   ?>
					  <div class="form-group">
                      <label for="title">Image Name</label>
                      <input type="text" name="name" class="form-control"  placeholder="Enter Name Of File" ">
                    </div>
					  <div class="form-group">
                      <label for="title">Select File</label>
                      <input type="file" name="file" class="form-control"  >
                    </div>
					  
					  
					  
					  
					 
                   
                    
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
					  <button type="submit" name="upload" class="btn btn-primary">Upload Image</button>
                    
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
	<script>
		$("#imagefile").on("change",function(){
	var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("imagefile").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("imageloc").src = oFREvent.target.result;
        };
	
	});
</script>
    
  </body>
</html>
