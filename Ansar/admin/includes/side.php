
//require_once("init.php");
	<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
			
          <!-- Sidebar user panel -->
         
          <!-- search form -->
         
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="">
              <a href="index.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> 
              </a>
            </li>
            
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i>
                <span>Students</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                
				  <li><a href="users.php?type=active"><i class="fa fa-circle-o"></i>View Pending Applications</a></li>
                <li><a href="users.php?type=admitted"><i class="fa fa-circle-o"></i>View Accepted Applications</a></li>
                <li><a href="users.php?type=declined"><i class="fa fa-circle-o"></i>View Declined Applications</a></li>
                
              </ul>
            </li>



            <li class="treeview">
              <a href="#">
                <i class="fa fa-comments"></i>
                <span>Events</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                
				        <li><a href="addpost.php"><i class="fa fa-plus"></i>Add Post</a></li>
                <li><a href="viewposts.php"><i class="fa fa-picture-o"></i>View Posts</a></li>
                <li><a href="editpost.php"><i class="fa fa-edit"></i>Edit Post</a></li>
                
              </ul>
            </li>
            

            <li class="treeview">
              <a href="#">
                <i class="fa fa-picture-o"></i>
                <span>Gallery</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                
				        <li><a href="addfile.php"><i class="fa fa-plus"></i>Add photo</a></li>
                <li><a href="#"><i class="fa fa-picture-o"></i>View Images</a></li>
                <li><a href="#"><i class="fa fa-file-video-o"></i>View Videos</a></li>
                
              </ul>
            </li>



            <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i>
                <span>Pages</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                
				  <li><a href="slider.php"><i class="fa fa-circle-o"></i>Homepage Slider</a></li>
                <li><a href="addteacher.php"><i class="fa fa-circle-o"></i>Teachers</a></li>
                <li><a href="student.php"><i class="fa fa-circle-o"></i>Student Slider</a></li>
                <li><a href="facilities.php"><i class="fa fa-circle-o"></i>Facilities</a></li>
                
              </ul>
            </li>



            <li class="treeview">
              <a href="#">
                <i class="fa fa-newspaper-o"></i>
                <span>MailBox</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                
				        
                <li><a href="mailbox.php"><i class="fa fa-print"></i>View Mails</a></li>
                <li><a href="compose.php"><i class="fa fa-keyboard-o"></i>Compose Mail</a></li>
                
              </ul>
            </li>
            


            <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i>
                <span>Account Settings</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                
				  <li><a href="adduser.php"><i class="fa fa-circle-o"></i>Add User</a></li>
                <li><a href="viewadmin.php"><i class="fa fa-circle-o"></i>View Users</a></li>
                <li><a href="changepass.php"><i class="fa fa-circle-o"></i>Change password</a></li>
                
              </ul>
            </li>
            
           
            
            <li><a href="logout.php"><i class="fa fa-circle-o text-warning"></i> Logout</a></li>
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>';
	
