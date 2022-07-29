<?php
require_once("includes/init.php");
if(!isset($_SESSION['id'])){
	$message->messg("Login to get access to this page");
	redirect_to("../login.php");
}
	

if(isset($_GET['admitted'])){
		
	$rid=$_GET['admitted'];
	$sql="UPDATE `admission` SET `status` = 'admitted' WHERE `admission`.`id` = '$rid'";
	$query=$mysqli->query($sql);
	$message->messg("Application Accepted ");
	redirect_back();
	
}

if(isset($_GET['declined'])){
	
	$rid=$_GET['declined'];
	$sql="UPDATE `admission` SET `status` = 'declined' WHERE `admission`.`id` = '$rid'";
	$query=$mysqli->query($sql);
	$message->messg("Application Declined");
	redirect_back();
	
}


$id=$_SESSION['id'];
$uid=$_GET['id'];

$sql="SELECT * FROM admission WHERE id='$uid'";
$query=$mysqli->query($sql);
$row=$query->fetch_assoc();
$rid=$row['id'];

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ALAAMA | View Users</title>
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
      <?php
		include("includes/side.php");
		?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Student Profile
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
           
            <li class="active">Profile</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
			  <?php $message->messg();  
			  ?>
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
              <div class="box box-primary">
               <div class="box-header">
                  
                </div>
                <!-- form start -->
                <form action="" enctype="multipart/form-data" method="post">
                  <div class="box-body">
					
					  <table id="example1" class="table table-bordered table-striped">
                    
                    <tbody>
<tr><td colspan="4"><img style="display: block;margin: 0 auto; border: 2px double #000000; width: 200px; min-height: 200px;" src="<?php echo $row['photo'] ?>" alt="User Passport"/></td></tr>					
						
            <tr><th>Parent Name</th><td colspan="3"><?php echo $row['parentname'] ?></td></tr>
						
            <tr><th>Home Address</th><td><?php echo $row['homeadd'] ?></td>
						
            <tr><th>Occupation</th><td><?php echo $row['occupation'] ?></td>

            <tr><th>Office Address</th><td><?php echo $row['offaddress'] ?></td>
            
            <tr><th>Phone</th><td><?php echo $row['phone'] ?></td></tr>
						
            <tr><th>Email</th><td><?php echo $row['email'] ?></td>

            <tr><th>Student Name</th><td><?php echo $row['stuname'] ?></td>

            <tr><th>Gender</th><td><?php echo $row['gender'] ?></td></tr>

            <tr><th>Date Of Birth</th><td><?php // echo strftime("%d-%b-%Y",$row['dob']) ?></td>

            <tr><th>Nationality</th><td><?php echo $row['nationality'] ?></td></tr>
            
            <th>State</th><td><?php echo $row['state'] ?></td></tr>

            <th>LGA</th><td><?php echo $row['lga'] ?></td></tr>

            <tr><th>Class</th><td><?php echo $row['class'] ?></td>
					                 
                     
            
            <tr><th>Previous School</th><td><?php echo $row['prevschool'] ?></td></tr>
            
            <tr><th>School Address</th><td><?php echo $row['prevaddress'] ?></td> 
            
            <tr><th>Headmaster/Principal</th><td><?php echo $row['headmaster'] ?></td> 
            
            <tr><th>Previous Class</th><td><?php echo $row['prevclass'] ?></td>

            <tr><th>Reason for transfer</th><td><?php echo $row['reason'] ?></td> 
												
						<tr><th>Status</th><td colspan="3"><?php echo $row['status']==""?"Pending":ucfirst($row['status']); ?></td></tr>
						
                      
                    </tbody>
                    
                  </table>
                    
                  </div><!-- /.box-body -->

                  
                </form>
              </div><!-- /.box -->

              

            </div>
			  
			  <?php 
			  if($_SESSION['role']=='admin'){
				  echo '<div class="col-md-4">
              <!-- general form elements -->
              <div class="box box-primary">
               <div class="box-header">
                  <h3 class="box-title">Others</h3>
                </div>
                <!-- form start -->
                <form action=""  method="post">
                  <div class="box-body">
					  
                    

                  <div class="box-footer">
                    <a href="?id='. $row['id'].'&accept='. $row['id'] .'"  class="btn btn-success prompt" >Accept Application</a>
                    <a href="?id='. $row['id'].'&decline='.$row['id'] .'" class="btn btn-danger prompt">Decline Application</a>
                    
					  
                  </div>
                </form>
              </div><!-- /.box -->
				  
				  

              

            </div>';
			  }else{echo' <div class="col-md-6">
              <!-- general form elements -->
				   <!-- general form elements -->
              <div class="box box-primary">
               <div class="box-header">
                  
                </div>
                <!-- form start -->
                <form action=""  method="post">
                  <div class="box-body">
					  
                    

                  
                </form>
              </div><!-- /.box -->
           
            </div>';}
			  ?>
			 
				  
				  
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
		$(".prompt").on("click",function(e){
			var ht=$(this).html();
			var result=confirm("Are You Sure You Want To "+ht+" ?");
			if(!result){e.preventDefault();}
		});
		
	
	
		</script>
  </body>
</html>
