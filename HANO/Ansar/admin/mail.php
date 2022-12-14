<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<?php include('inc/navbar.php'); ?>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">


                <!-- Right side column. Contains the navbar and content of the page -->
                <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <h1>
                            Mailbox
                            <small>13 new messages</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                            <li class="active">Mailbox</li>
                        </ol>
                    </section>
                
                    <!-- Main content -->
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
                    </section><!-- /.content -->
                </div><!-- /.content-wrapper -->

               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
