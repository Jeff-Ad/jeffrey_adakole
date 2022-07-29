<?php
require_once("includes/init.php");
if(!isset($_SESSION['id'])){
	$message->messg("Login to get access to this page");
	redirect_to("../login.php");
	
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>ALAAMA| Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="dist/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="dist/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

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
      <!-- Left side column. contains the logo and sidebar -->
      <?php
		include("includes/side.php");
		?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php
					  $total=0;
					  $sql="SELECT COUNT(*) FROM `admission` WHERE `status`='' or ISNULL(status)";
					  $query=$mysqli->query($sql);
					  $row=$query->fetch_assoc();
					   $count=array_pop($row)+0;
					  $total=$total+$count;
					  echo $count;
					  
					  ?></h3>
                  <p>Pending Applications</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="users.php?type=pending" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i> </a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php
					  $sql="SELECT COUNT(*) FROM `admission` WHERE `status`='admitted'";
					  $query=$mysqli->query($sql);
					  $row=$query->fetch_assoc();
					  $count=array_pop($row)+0;
					  $total=$total+$count;
					  echo $count;
					  
					  ?></h3>
                  <p>Accepted Applications</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="users.php?type=admitted" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php
					  $sql="SELECT COUNT(*) FROM `admission` WHERE `status`='declined'";
					  $query=$mysqli->query($sql);
					  $row=$query->fetch_assoc();
					  $count=array_pop($row)+0;
					  $total=$total+$count;
					  echo $count;
					  
					  ?></h3>
                  <p>Declined Applications</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="users.php?type=declined" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo($total); ?></h3>
                  <p>Total Applications</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="users.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-6 connectedSortable">
              

              <!-- TO DO List -->
              <div class="box box-primary">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>
                  <h3 class="box-title">Recent Applications</h3>
                  
                </div><!-- /.box-header -->
                <div class="box-body">
                  <ul class="todo-list">
                   <?php
					  $query=$mysqli->query("SELECT * FROM admission ORDER BY id DESC LIMIT 10");
					  while($row=$query->fetch_assoc()){
						  $name=$row['stuname']." ".$row['parentname'];
						  $id=$row['id'];
						 echo '<li><a href="viewusers.php?id='.$id.'">
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                      
                      <span class="text">'.$name.'</span>
                      <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                      </div></a>
                    </li>'; 
						  
					  }
					  ?>
                  
                  </ul>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix no-border">
					<a  href="users.php" class="btn btn-default pull-left"><i class="fa fa-plus"></i> View Student</a>
                </div>
              </div><!-- /.box -->

              
            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->

            <section class="col-lg-6 connectedSortable">
              

              <!-- TO DO List -->
              <div class="box box-primary">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>
                  <h3 class="box-title">Recent Blog Posts</h3>
                  
                </div><!-- /.box-header -->
                <div class="box-body">
                  <ul class="todo-list">
                   <?php
					  $query=$mysqli->query("SELECT * FROM blog ORDER BY id DESC LIMIT 10");
					  while($row=$query->fetch_assoc()){
						  $name=$row['title'];
						  $id=$row['id'];
						 echo '<li><a href="viewposts.php?id='.$id.'">
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                      
                      <span class="text">'.$name.'</span>
                      <div class="tools">
                        <i class="fa fa-edit"></i>
                        <i class="fa fa-trash-o"></i>
                      </div></a>
                    </li>'; 
						  
					  }
					  ?>
                  
                  </ul>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix no-border">
					<a  href="viewposts.php" class="btn btn-default pull-left"><i class="fa fa-plus"></i> View All Posts</a>
                </div>
              </div><!-- /.box -->

              
            </section><!-- /.Left col -->


            <section class="col-lg-5 connectedSortable">

              

<!-- Calendar -->
<div class="box box-solid bg-green-gradient">
  <div class="box-header">
    <i class="fa fa-calendar"></i>
    <h3 class="box-title">Calendar</h3>
    <!-- tools box -->
    <div class="pull-right box-tools">
      <!-- button with a dropdown -->
      <div class="btn-group">
        
        
      </div>
      <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
      <button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
    </div><!-- /. tools -->
  </div><!-- /.box-header -->
  <div class="box-body no-padding">
    <!--The calendar -->
    <div id="calendar" style="width: 100%"></div>
  </div><!-- /.box-body -->
  <div class="box-footer text-black">
    <div class="row">
      <div class="col-sm-12">
        <!-- Progress bars -->
        <div class="clearfix">
          <span class="pull-left">Todays date is: <?php $time=strftime("%d, %b, %Y",strtotime("now")); echo $time; ?> </span>
          
        </div>
        

        
      </div><!-- /.col -->
      <!-- /.col -->
    </div><!-- /.row -->
  </div>
</div><!-- /.box -->

</section><!-- right col -->

          
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include("inc/footer.php") ?>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
      <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="dist/js/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    
  </body>
</html>