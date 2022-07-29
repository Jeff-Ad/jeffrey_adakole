<?php 
require_once("includes/init.php");
if(!isset($_SESSION['id'])){
	$message->messg("Login to get access to this page");
	redirect_to("../login.php");
	
}
if($_SESSION['role']!='admin'){
	redirect_to('viewusers.php?id='.$_SESSION['id'].'');
}
if(isset($_GET['del'])){
	$del=$_GET['del'];
	$sql="DELETE FROM `admission` WHERE `id` = $del";
	$mysqli->query($sql);
	$message->messg("Student Deleted");
	redirect_back();
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ALAAMA: All Students</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="dist/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="dist/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- DATA TABLES -->
    <link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
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
      
        <?php include("inc/header.php"); ?>
		<?php
		include("includes/side.php");
		?>
      <!-- Left side column. contains the logo and sidebar -->
      

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           <?php
						if(isset($_POST['search'])){
							echo "Search Result";
						}
			  			elseif(isset($_GET['type'])){
							if($_GET['type']=='admitted'){echo " Accepted Applications";}
							elseif($_GET['type']=='declined'){echo "Declined Applications";}
							else{echo " All Applications";}
						}else{
							
							echo " All Students";
						}
			  
			  ?>
			 
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            
            <li class="active">Students</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              
				<?php $message->messg();?>
              <div class="box">
                
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        
                        <th>Surname</th>
						<th>Student Name</th>
						<th>Gender</th>
                        <th>Date of Birth</th>  
                        <th>Class</th>
						<th>State</th>
						<th>Email</th>
						<th>Phone</th>
						
						 
                        <th>View</th>
                        <th>Delete</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                      <?php
						
						
			  			if(isset($_GET['type'])){
							if($_GET['type']=='admitted'){$sql="SELECT * FROM admission WHERE status='admitted'  ORDER BY `id` DESC";}
							elseif($_GET['type']=='declined'){$sql="SELECT * FROM admission WHERE status='declined'  ORDER BY `id` DESC";}
							else{$sql="SELECT * FROM admission WHERE status='' OR ISNULL(status)  ORDER BY `id` DESC";}
						}
						else
							{$sql="SELECT * FROM admission WHERE status='' OR ISNULL(status)  ORDER BY `id` DESC";}
						//echo $sql;
						$staff_arrary=array();
						$query=$mysqli->query($sql);
						while($row=$query->fetch_assoc()){
							
							$id=$row['id'];
							$surname=$row['parentname'];
							$stuname=$row['stuname'];
							$gender=$row['gender'];
							$dob=$row['dob'];
							$class=$row['class'];
							$state=$row['state'];
							$email=$row['email'];
							$phone=$row['phone'];
							
							
							
								
							$staff_arrary[]=$row;
							
							echo "<tr>
							<td>$id</td>
							<td>$surname</td>
							<td>$stuname</td>
							<td>$gender</td>
							<td>$dob</td>
							<td>$class</td>
							<td>$state</td>
							<td>$email</td>
							<td>$phone</td>
							
							<td><a  href=\"viewusers.php?id=$id\"  target=\"_blank\" class=\"btn btn-success\">View</a></td>
							<td><a href=\"?del=$id\" class=\"btn btn-danger prompt\">Delete</a></td>
							</tr>";
							
						}
						?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>ID</th>
                        
                        <th>Surname</th>
						<th>Student Name</th>
                        <th>Gender</th>
						<th>Date of Birth</th>
                        <th>Class</th>
						<th>State</th>
						<th>Email</th>
						<th>Phone</th>
						
                        <th>View</th>
                        <th>Delete</th>
                       
                      </tr>
                    </tfoot>
                  </table>
					
					<button id="export">Export</button>
					<?php 
					//print_r($staff_arrary);
					
					?>
					<table id="ex2" border="1">
						<tr>
							<th>S/N</th>
							<th>Surname</th>
							<th>Firstname</th>
							<th>Middle Name</th>
							<th>Phone</th>
							<th>Email</th>
							<th>State</th>
							<th>School</th>
							<th>Class</th>
							<th>Gender</th>
							<th>Status</th>

							
						</tr>
						<?php 
						$n=1;
						foreach($staff_arrary as $staff){
							$hiq=explode(",",$staff['id']);
							
							echo '<tr>
							<td>'.$n.'</td>
							<td>'.$staff['parentname'].'</td>
							<td>'.$staff['stuname'].'</td>
							
							<td>'.$staff['phone'].'</td>
							<td>'.$staff['email'].'</td>
							<td>'.$staff['state'].'</td>
							<td>'.$staff['lga'].'</td>
							<td>'.$staff['class'].'</td>
							<td>'.$staff['gender'].'</td>
							<td>'.$staff['status'].'</td>
							
							
							<td>'.$hiq[0].'</td>
							
							
							</tr>';
							$n++;
						}
						?>
					</table>

                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include("inc/footer.php") ?>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
  <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
    
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>
	<script src="export/jquery.table2excel.js"></script>
	<script> 
		$("#ex2").hide();
		$("#export").click(function(){
  $("#ex2").table2excel({
    // exclude CSS class
    exclude: ".noExl",
    name: "Worksheet Name",
    filename: "Admission List", //do not include extension
    fileext: ".xls" // file extension
  }); 
});
		
		$(".prompt").on("click",function(e){
			
			var result=confirm("Are You Sure You Want To Delete ?");
			if(!result){e.preventDefault();}
		});
		</script>

  </body>
</html>
