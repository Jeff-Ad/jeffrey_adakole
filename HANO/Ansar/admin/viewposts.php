<?php 

require_once("includes/init.php");
if(!isset($_SESSION['id'])){
	$message->messg("Login to get access to this page");
	redirect_to("../login.php");
	
    }

  


 
if(isset($_GET['del'])){
	$del=$_GET['del'];
	$sql="DELETE FROM `blog` WHERE `id` = $del";
	$mysqli->query($sql);
	$message->messg("Post Deleted");
	redirect_back();
}

    ?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">                                                                                                                                            
    <title>ALAAMA | Blog Posts</title>
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
            
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
           
            <li class="active">Edit/Delete Post  </li>
          </ol>
        </section>

        <!-- Main content -->
       



        <section class="col-lg-12 connectedSortable">
              

              <!-- TO DO List -->
              <div class="box box-primary">
                <div class="box-header">
                  <i class="ion ion-clipboard"></i>
                  <h3 class="box-title">Blog Posts</h3>
                  
                </div><!-- /.box-header -->
                <?php $message->messg(); ?>
                <div class="box-body">
                  <ul class="todo-list">
                   <?php
					  $query=$mysqli->query("SELECT * FROM blog ORDER BY id DESC");
					  while($row=$query->fetch_assoc()){
						  $name=$row['title']. " " .$row['author'];
						  $id=$row['id'];
						 echo '<li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                       
                        <a href=\"?del=$id\"  class=\"fa fa-ellipsis-v"\></a>
                      </span>
                      
                      <span class="text">'.$name.'</span>
                        
					  
                   
                      
                      
                    </li>'; 
                  }
                  ?>
                  

          <?php
						
						
           /* if(isset($_GET['type'])){
            if($_GET['type']=='admitted'){$sql="SELECT * FROM admission WHERE status='admitted'  ORDER BY `id` DESC";}
            elseif($_GET['type']=='declined'){$sql="SELECT * FROM admission WHERE status='declined'  ORDER BY `id` DESC";}
            else{$sql="SELECT * FROM admission WHERE status='' OR ISNULL(status)  ORDER BY `id` DESC";}
          }
          else*/
         
          
          ?>




                  </ul>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix no-border">
					        <a  href="" name='del' class="btn btn-default pull-left"><i class="fa fa-minus"></i>Delete all Posts</a>
                </div>
              </div><!-- /.box -->




              
          </section><!-- /.Left col -->


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
                        
                        <th>Title of Post</th>
                        <th>Author</th>
                        <th>Date</th>						 
                        <th>View</th>
                        <th>Delete</th>
                       
                      </tr>
                    </thead>
            
                    <tbody>

        <?php


            $sql="SELECT * FROM blog ORDER BY `id` DESC";
          //echo $sql;
          $post_arrary=array();
          $query=$mysqli->query($sql);
          while($row=$query->fetch_assoc()){
            
            $id=$row['id'];
            $title=$row['title'];
            $author=$row['author'];
            $content=$row['content'];
            $dob=$row['date'];
            
            
              
            $post_arrary[]=$row;
            
            echo "<tr>
            <td>$id</td>
            <td>$title</td>
            <td>$author</td>
            <td>$dob</td>
            
            
            <td><a  href=\"post.php?id=$id\"  target=\"_blank\" class=\"btn btn-success\">View</a></td>
            <td><a href=\"?del=$id\" class=\"btn btn-danger prompt\">Delete</a></td>
            </tr>";
            



          }
        ?>


                  </tbody>
            </table>
        </div>
        </div>
        </div>
        </section>



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
<script src="tinymce/tinymce.min.js"></script>
	  <script>
	   tinymce.init({
   selector: 'textarea',
        theme: 'modern',
        width: '100%',
		  relative_urls: false,
   

        plugins: [
             "advlist autolink link image lists charmap print preview hr anchor pagebreak",
             "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
             "table contextmenu directionality emoticons paste textcolor filemanager  code fullscreen"
       ],
		   menubar: 'edit insert view format table tools'
		  ,
       toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
 
		   toolbar2: "| responsivefilemanager | fullscreen | image media | forecolor backcolor  | print preview code | caption",
        image_caption: true,
       image_advtab: true ,
		  external_filemanager_path:"tinymce/plugins/filemanager/",
       filemanager_title:"Responsive Filemanager" ,
       external_plugins: { "filemanager" : "plugins/filemanager/plugin.min.js"},
       
      
      visualblocks_default_state: true ,

      style_formats_autohide: true,
      style_formats_merge: true,
});
    $(".prompt").on("click",function(e){
			
			var result=confirm("Are You Sure You Want To Delete ?");
			if(!result){e.preventDefault();}
		});
	  </script>
  </body>
</html>