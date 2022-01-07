<?php
require_once("includes/init.php");
if(!isset($_SESSION['id'])){
	$message->messg("Login to get access to this page");
	redirect_to("../login.php");
	
}
$role=$_SESSION['role'];//role of the user logged in Admin or normal staff




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
            Compose Mail
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
           
            <li class="active">Mail</li>
          </ol>
        </section>

        <section class="content">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="compose.html" class="btn btn-primary btn-block margin-bottom">Compose</a>
                                <div class="box box-solid">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Folders</h3>
                                    </div>
                                    <div class="box-body no-padding">
                                        <ul class="nav nav-pills nav-stacked">
                                            <li class="active"><a href="#"><i class="fa fa-inbox"></i> Inbox <span
                                                        class="label label-primary pull-right">12</span></a></li>
                                            <li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>
                                            <li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
                                            <li><a href="#"><i class="fa fa-filter"></i> Junk <span
                                                        class="label label-waring pull-right">65</span></a></li>
                                            <li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>
                                        </ul>
                                    </div><!-- /.box-body -->
                                </div><!-- /. box -->
                                <div class="box box-solid">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Labels</h3>
                                    </div>
                                    <div class="box-body no-padding">
                                        <ul class="nav nav-pills nav-stacked">
                                            <li><a href="#"><i class="fa fa-circle-o text-red"></i> Important</a></li>
                                            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> Promotions</a></li>
                                            <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> Social</a></li>
                                        </ul>
                                    </div><!-- /.box-body -->
                                </div><!-- /.box -->
                            </div><!-- /.col -->
                            <div class="col-md-9">
                                <div class="box box-primary">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Inbox</h3>
                                        <div class="box-tools pull-right">
                                            <div class="has-feedback">
                                                <input type="text" class="form-control input-sm" placeholder="Search Mail" />
                                                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                                            </div>
                                        </div><!-- /.box-tools -->
                                    </div><!-- /.box-header -->
                                    <div class="box-body no-padding">
                                        <div class="mailbox-controls">
                                            <!-- Check all button -->
                                            <button class="btn btn-default btn-sm checkbox-toggle"><i
                                                    class="fa fa-square-o"></i></button>
                                            <div class="btn-group">
                                                <button class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                                                <button class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                                                <button class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                                            </div><!-- /.btn-group -->
                                            <button class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                                            <div class="pull-right">
                                                1-50/200
                                                <div class="btn-group">
                                                    <button class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                                                    <button class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                                                </div><!-- /.btn-group -->
                                            </div><!-- /.pull-right -->
                                        </div>
                                        <div class="table-responsive mailbox-messages">
                                            <table class="table table-hover table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td><input type="checkbox" /></td>
                                                        <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a>
                                                        </td>
                                                        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                                        <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a
                                                            solution to this problem...</td>
                                                        <td class="mailbox-attachment"></td>
                                                        <td class="mailbox-date">5 mins ago</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="checkbox" /></td>
                                                        <td class="mailbox-star"><a href="#"><i
                                                                    class="fa fa-star-o text-yellow"></i></a></td>
                                                        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                                        <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a
                                                            solution to this problem...</td>
                                                        <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                                                        <td class="mailbox-date">28 mins ago</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="checkbox" /></td>
                                                        <td class="mailbox-star"><a href="#"><i
                                                                    class="fa fa-star-o text-yellow"></i></a></td>
                                                        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                                        <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a
                                                            solution to this problem...</td>
                                                        <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                                                        <td class="mailbox-date">11 hours ago</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="checkbox" /></td>
                                                        <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a>
                                                        </td>
                                                        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                                        <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a
                                                            solution to this problem...</td>
                                                        <td class="mailbox-attachment"></td>
                                                        <td class="mailbox-date">15 hours ago</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="checkbox" /></td>
                                                        <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a>
                                                        </td>
                                                        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                                        <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a
                                                            solution to this problem...</td>
                                                        <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                                                        <td class="mailbox-date">Yesterday</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="checkbox" /></td>
                                                        <td class="mailbox-star"><a href="#"><i
                                                                    class="fa fa-star-o text-yellow"></i></a></td>
                                                        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                                        <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a
                                                            solution to this problem...</td>
                                                        <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                                                        <td class="mailbox-date">2 days ago</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="checkbox" /></td>
                                                        <td class="mailbox-star"><a href="#"><i
                                                                    class="fa fa-star-o text-yellow"></i></a></td>
                                                        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                                        <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a
                                                            solution to this problem...</td>
                                                        <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                                                        <td class="mailbox-date">2 days ago</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="checkbox" /></td>
                                                        <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a>
                                                        </td>
                                                        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                                        <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a
                                                            solution to this problem...</td>
                                                        <td class="mailbox-attachment"></td>
                                                        <td class="mailbox-date">2 days ago</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="checkbox" /></td>
                                                        <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a>
                                                        </td>
                                                        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                                        <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a
                                                            solution to this problem...</td>
                                                        <td class="mailbox-attachment"></td>
                                                        <td class="mailbox-date">2 days ago</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="checkbox" /></td>
                                                        <td class="mailbox-star"><a href="#"><i
                                                                    class="fa fa-star-o text-yellow"></i></a></td>
                                                        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                                        <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a
                                                            solution to this problem...</td>
                                                        <td class="mailbox-attachment"></td>
                                                        <td class="mailbox-date">2 days ago</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="checkbox" /></td>
                                                        <td class="mailbox-star"><a href="#"><i
                                                                    class="fa fa-star-o text-yellow"></i></a></td>
                                                        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                                        <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a
                                                            solution to this problem...</td>
                                                        <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                                                        <td class="mailbox-date">4 days ago</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="checkbox" /></td>
                                                        <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a>
                                                        </td>
                                                        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                                        <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a
                                                            solution to this problem...</td>
                                                        <td class="mailbox-attachment"></td>
                                                        <td class="mailbox-date">12 days ago</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="checkbox" /></td>
                                                        <td class="mailbox-star"><a href="#"><i
                                                                    class="fa fa-star-o text-yellow"></i></a></td>
                                                        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                                        <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a
                                                            solution to this problem...</td>
                                                        <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                                                        <td class="mailbox-date">12 days ago</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="checkbox" /></td>
                                                        <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a>
                                                        </td>
                                                        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                                        <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a
                                                            solution to this problem...</td>
                                                        <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                                                        <td class="mailbox-date">14 days ago</td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="checkbox" /></td>
                                                        <td class="mailbox-star"><a href="#"><i class="fa fa-star text-yellow"></i></a>
                                                        </td>
                                                        <td class="mailbox-name"><a href="read-mail.html">Alexander Pierce</a></td>
                                                        <td class="mailbox-subject"><b>AdminLTE 2.0 Issue</b> - Trying to find a
                                                            solution to this problem...</td>
                                                        <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                                                        <td class="mailbox-date">15 days ago</td>
                                                    </tr>
                                                </tbody>
                                            </table><!-- /.table -->
                                        </div><!-- /.mail-box-messages -->
                                    </div><!-- /.box-body -->
                                    <div class="box-footer no-padding">
                                        <div class="mailbox-controls">
                                            <!-- Check all button -->
                                            <button class="btn btn-default btn-sm checkbox-toggle"><i
                                                    class="fa fa-square-o"></i></button>
                                            <div class="btn-group">
                                                <button class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button>
                                                <button class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                                                <button class="btn btn-default btn-sm"><i class="fa fa-share"></i></button>
                                            </div><!-- /.btn-group -->
                                            <button class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                                            <div class="pull-right">
                                                1-50/200
                                                <div class="btn-group">
                                                    <button class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                                                    <button class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                                                </div><!-- /.btn-group -->
                                            </div><!-- /.pull-right -->
                                        </div>
                                    </div>
                                </div><!-- /. box -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </section>

        <!-- Main content -->
        <section class="content">
             <!-- /.row -->
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
