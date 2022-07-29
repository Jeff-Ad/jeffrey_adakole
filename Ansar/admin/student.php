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

$pid=$_SESSION['id'];

if(isset($_POST['up'])){
	$title=$_POST['title'];
    $author=$_POST['author'];
    $content=$_POST['content'];
	$file=$_FILES['file'];
	$time=strtotime("now");
	if($file['error']!=0){$message->messg("Invalid File, Make sure file is not more than 5Mb");redirect_back();}
	//elseif($file['type']!='application/pdf'){$message->messg("File Not A valid PDF");redirect_back();}
	else{
	
	
	$file_name=($file['name']);	
	$temp=$file['tmp_name'];
	//$time=strtotime("now");
	$link="../gallery/".$time.$file_name;
	$loc2="gallery/".$time.$file_name;
			
			if(move_uploaded_file($temp,$link)){
								
				$sql="UPDATE `blog` SET `title` = '$title', `author` = '$author',  `content` = '$content', `photo` = '$loc2' WHERE 'blog'. 'id' = $pid";
				$query=$mysqli->query($sql);
				if($mysqli->affected_rows>0){
					$message->messg("Blog post Updated");
                        redirect_to("post.php?id=$pid");}
                else{
                    $message->messg("Failed to update blog post, Please retry");}
						redirect_back();
				}
			}
	
	
	

	
		}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>RMRDC | Add Post</title>
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
            Update post
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
           
            <li class="active">Add  Post</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
			  
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
               <div class="box-header">
				   <style>
					   #alert{
						   color: red;
					   }
				   </style>
                  <h3 class="box-title"> Event</h3>
                </div>
                <!-- form start -->
                <form action="" enctype="multipart/form-data" method="post">
                  <div class="box-body">
					
					  <?php $message->messg();   ?>
					  <div class="form-group">
                      <label for="title">Title Of Post</label>
                      <input type="text" name="title" class="form-control" value = "" placeholder="Title of post" ">
                    </div>

                    <div class="form-group">
                      <label for="title">Author</label>
                      <input type="text" name="author" class="form-control" value = "" placeholder="" ">
                    </div>
					  <div class="form-group">
                      
                      <label for="title">Select Image</label>
                      <input type="file" name="file" value ="" class="form-control"  >
                      <span class="label-danger">Note: Image should be in PDF, PNG, JPEG format</span>
                    </div>

                    <div class="form-group">
                        <label>Content</label>
                        <textarea name= "content" value = "" class="form-control" rows="3"></textarea>
                    </div>
					  
					  
					  
					  
					 
                   
                    
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
					  <button type="submit" name="up" class="btn btn-success">Publish</button>
            <button type="reset" name="" class="btn btn-danger">Reset</button>
                    
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
	  
	  </script>
  </body>
</html>