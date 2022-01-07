<?php

require_once('includes/init.php');



if(isset($_POST['submit'])){

    $parentname = mysql_prep($_POST['parentname']);
    $homeadd = mysql_prep($_POST['homeadd']);
    $occupation = mysql_prep($_POST['occupation']);
    $offaddress = mysql_prep($_POST['offaddress']);
    $phone = mysql_prep($_POST['phone']);
    $email = mysql_prep($_POST['email']);
    
    
    $studentname = mysql_prep($_POST['studentname']);
    $gender= $_POST['gender'];
    $dob= strtotime($_POST['dob']);
    $nationality = mysql_prep($_POST['nationality']);
    $state = mysql_prep($_POST['state']);
    $lga= mysql_prep($_POST['lga']);
    $class= mysql_prep($_POST['class']);
    
   
    $prevschool= mysql_prep($_POST['prevschool']);
    $schooladd= mysql_prep($_POST['schooladd']);
    $prevclass= mysql_prep($_POST['prevclass']);
    $headmaster= mysql_prep($_POST['headmaster']);
    $reason= mysql_prep($_POST['reason']);
    $file= $_FILES['file'];
    $time=strtotime("now");
	if($file['error']!=0){
        $message->messg("Invalid File, Make sure file is not more than 5Mb");redirect_back();}
	else{
	
	
	$file_name=($file['name']);	
	$temp=$file['tmp_name'];
	$link="admin/img/".$time.$file_name;
	$loc2="img/".$time.$file_name;
			
			if(move_uploaded_file($temp,$link)){
                $sql = "INSERT INTO `admission` (`id`, `parentname`, `homeadd`, `occupation`, `offaddress`, `phone`, `email`, `state`, `lga`, `nationality`, `stuname`, `photo`, `dob`, `gender`, `class`, `prevschool`, `prevaddress`, `headmaster`, `prevclass`, `reason`) VALUES (NULL, '$parentname', '$homeadd', '$occupation', '$offaddress', '$phone', '$email', '$state', '$lga', '$nationality', '$studentname', '$loc2', '$dob', '$gender', '$class', '$prevschool','$schooladd','$headmaster', '$prevclass', '$reason')";
                $query = $mysqli->query($sql);
				//echo $sql;
                if($mysqli->affected_rows>0){
                    $message->messg("Application Submitted Successfuly");}
                        else{$message->messg("Failed to Submit Application");}
                            redirect_back();
                    
                    }
                }
               
        }


include('layouts/links.php');
include('layouts/top-navbar.php');
?>

<!-- Page breadcrumb -->
<section id="mu-page-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-page-breadcrumb-area">
                    <h2>Admission</h2>
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Admission</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End breadcrumb -->
<section id="mu-contact">
    <div class="container">
        <div class="row ">
            <div class="col-md-12 ">
                <div class="mu-contact-area">
                    <div class="mu-contact-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="container">

                                <button class="btn btn-info">
                                Note: 2000 Naira fee will be paid during registration
                                </button>
                                <?php $message->messg();   ?>
                                    <legend>PARENT'S/GUARDIAN DETAILS</legend>
                                    <div class="content">
                                        <form action="" enctype="multipart/form-data" method="post">
                                            <div class="user-details">
                                                <div class="input-box">
                                                    <label class="details">Name</label>
                                                    <input type="text" name="parentname" placeholder="Enter your name" required>
                                                </div>
                                                <div class="input-box">
                                                    <label class="details" for="Relationship">Home Address</label>
                                                    <input type="text" name="homeadd" id="homeadd" class="form-control" value="">       
                                                </div>
                                                <div class="input-box">
                                                    <label class="details" for="father">Occupation</label>
                                                    <input type="text" name="occupation" id="" class="form-control" placeholder="Occupation " value="">
                                                </div>

                                                <div class="input-box">
                                                    <label class="details" for="Relationship">Office Address</label>
                                                    <input type="text" name="offaddress" id="offadfress" class="form-control" value="">       
                                                </div>

                                                <div class="input-box">
                                                    <label for="phone" class="details">Phone Number</label>
                                                    <div class="input-group">
                                                        <input type="text" name="phone" id="" class="form-control" placeholder="Enter your number" required>
                                                    </div>
                                                </div>
                                                <div class="input-box">
                                                    <label class="details">Email Address</label>
                                                    <input type="email" name="email" placeholder="Enter your email" required>
                                                </div>

                                               


                                                <legend>APPLICANT'S DETAILS</legend>

                                                <div class="input-box">
                                                    <label class="details">Passport</label>
                                                    <input type="file" name="file" placeholder="">
                                                </div>

                                                <div class="input-box">
                                                    <label class="details">Student Name</label>
                                                    <input type="text" name="studentname" placeholder="Enter student name" required>
                                                </div>
                                                <div class="input-box">
                                                    <label class="details">D.O.B</label>
                                                    <input type="date" name="dob" id="date" class="form-control datepicker" placeholder="Enter Date of Birth" required value="">
                                                </div>


                                                <div class="input-box">
                                                    <label for="class" class="mb-0 strong">Gender</label>
                                                    <select name="gender" id="" class="form-control" value="">
                                                        <option name = "male" value="male">Male</option>
                                                        <option name = "female" value="female">Female</option>
                                                        
                                                    </select>
                                                    
                                                </div>

                                                <div class="input-box">
                                                    <label class="details">Nationality</label>
                                                    <input type="text" name="nationality" placeholder="Enter Nationality" required>
                                                </div>

                                                <div class="input-box">
                                                    <label for="father" class="details">State of Origin</label>
                                                    <select name="state" class="form-control" id="state" value="">
                                                        <option value="state">Select State of Origin</option>
                                                        <option name = "Fct" value="Federal Capital Territory (FCT)">Federal Capital Territory (FCT)</option>
                                                        <option name = "Abi" value="Abia">Abia</option>
                                                        <option name = "Adamawa" value="Adamawa">Adamawa</option>
                                                        <option name = "Akwa ibom" value="Akwa ibom">Akwa ibom</option>
                                                        <option name = "Anambra" value="Anambra">Anambra</option>
                                                        <option name = "Bauchi" value="Bauchi">Bauchi</option>
                                                        <option name = "Bayelsa" value="Bayelsa">Bayelsa</option>
                                                        <option name = "Benue" value="Benue">Benue</option>
                                                        <option name = "Borno" value="Borno">Borno</option>
                                                        <option name = "Cross rivers" value="Cross River">Cross River</option>
                                                        <option name = "Delta" value="Delta">Delta</option>
                                                        <option name = "Ebonyi" value="Ebonyi">Ebonyi</option>
                                                        <option name = "Edo" value="Edo">Edo</option>
                                                        <option name = "Ekiti" value="Ekiti">Ekiti</option>
                                                        <option name = "Enugu" value="Enugu">Enugu</option>
                                                        <option name = "Gombe" value="Gombe">Gombe</option>
                                                        <option name = "Imo" value="Imo">Imo</option>
                                                        <option name = "Jigawa" value="Jigawa">Jigawa</option>
                                                        <option name = "Kaduna" value="Kaduna">Kaduna</option>
                                                        <option name = "Kano" value="Kano">Kano</option>
                                                        <option name = "Katsina" value="Katsina">Katsina</option>
                                                        <option name = "Kebbi" value="Kebbi">Kebbi</option>
                                                        <option name = "Kogi" value="Kogi">Kogi</option>
                                                        <option name = "Kwara" value="Kwara">Kwara</option>
                                                        <option name = "Lagos" value="Lagos">Lagos</option>
                                                        <option name = "Nassarawa" value="Nassarawa">Nasarawa</option>
                                                        <option name = "Niger" value="Niger">Niger</option>
                                                        <option name = "Ogun" value="Ogun">Ogun</option>
                                                        <option name = "Ondo" value="Ondo">Ondo</option>
                                                        <option name = "Osun" value="Osun">Osun</option>
                                                        <option name = "Oyo" value="Oyo">Oyo</option>
                                                        <option name = "Plateau" value="Pleateau">Pleateau</option>
                                                        <option name = "Rivers" value="Rivers">Rivers</option>
                                                        <option name = "Sokoto" value="Sokoto">Sokoto</option>
                                                        <option name = "Taraba" value="Taraba">Taraba</option>
                                                        <option name = "Yobe" value="Yobe">Yobe</option>
                                                        <option name = "Zamfara" value="Zamfara">Zamfara</option>

                                                    </select>
                                                </div>

                                                <div class="input-box">
                                                    <label class="details">L.G.A</label>
                                                    <input type="text" name="lga" placeholder="Local Government Area" required>
                                                </div>


                                               

                                                <div class="input-box">
                                                    <label for="class" class="mb-0 strong">Class for which admission is sought</label>
                                                    <select name="class" id="" class="form-control" value="">
                                                        <option name = "Nursery 1" value="Nursery 1"> Nursery 1 </option>
                                                        <option name = "Nursery 2" value="Nursery 2"> Nursery 2</option>
                                                        <option name = "Primary 1" value="Primary 1"> Primary 1</option>
                                                        <option name = "Primary 2" value="Primary 2"> Primary 2 </option>
                                                        <option name = "Primary 3" value="Primary 3"> Primary 3</option>
                                                        <option name = "JSS 1" value="JSS 1"> JSS 1</option>
                                                        <option name = "JSS 2" value="JSS 2"> JSS 2</option>
                                                        <option name = "JSS 3" value="JSS 2"> JSS 3</option>
                                                        <option name = "SSS 1" value="JSS 2"> SSS 1</option>
                                                        <option name = "SSS 2" value="JSS 2"> SSS 2</option>
                                                        <option name = "SSS 3" value="JSS 2"> SSS 3</option>
                                                </select>
                                                    <div class="input-box ">
                                                        <button class="btn btn-success" type="button" data-toggle="modal" data-target="#modal">Show Fees</button>
                                                    </div>
                                                </div>

                                                
                                            </div>
                                            <div class="table-responsive modal fade bg-white" id="modal">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" >School Fees</h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <table class="table table-bordered table-striped modal-body">
                                                            <thead>
                                                                <tr class="text-center">
                                                                    <th class="w-25">Class</th>
                                                                    <th>First Term</th>
                                                                    <th>Second term</th>
                                                                    <th>Third Term</th>
                                                                    <th>Yearly</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="text-center">
                                                                <tr>
                                                                    <td>
                                                                        Nursery 1
                                                                    </td>
                                                                    <td>&#8358;360,000</td>
                                                                    <td>&#8358;280,000</td>
                                                                    <td>&#8358;280,000</td>
                                                                    <td>&#8358;920,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Nursery 2
                                                                    </td>
                                                                    <td>&#8358;375,000</td>
                                                                    <td>&#8358;295,000</td>
                                                                    <td>&#8358;295,000</td>
                                                                    <td>&#8358;965,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Reception
                                                                    </td>
                                                                    <td>&#8358;390,000</td>
                                                                    <td>&#8358;315,000</td>
                                                                    <td>&#8358;315,000</td>
                                                                    <td>&#8358;1,020,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Primary 1
                                                                    </td>
                                                                    <td>&#8358;475,000</td>
                                                                    <td>&#8358;380,000</td>
                                                                    <td>&#8358;380,000</td>
                                                                    <td>&#8358;1,235,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Primary 2
                                                                    </td>
                                                                    <td>&#8358;500,000</td>
                                                                    <td>&#8358;400,000</td>
                                                                    <td>&#8358;400,000</td>
                                                                    <td>&#8358;1,300,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        Primary 3
                                                                    </td>
                                                                    <td>&#8358;500,000</td>
                                                                    <td>&#8358;400,000</td>
                                                                    <td>&#8358;400,000</td>
                                                                    <td>&#8358;1,300,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        JSS 1
                                                                    </td>
                                                                    <td>&#8358;600,000</td>
                                                                    <td>&#8358;470,000</td>
                                                                    <td>&#8358;470,000</td>
                                                                    <td>&#8358;1,540,000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        JSS 2
                                                                    </td>
                                                                    <td>&#8358;600,000</td>
                                                                    <td>&#8358;470,000</td>
                                                                    <td>&#8358;470,000</td>
                                                                    <td>&#8358;1,540,000</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                            


    <legend>SECTION C: Previous School Details</legend>

                                  
        
                <div class="input-box">
                <label for="previous" class="mb-0 strong">Name of Previous school</label>
                <div class="input-box mb-2">
                    <input type="text" name="prevschool" id="" class="form-control" placeholder="Name of Prevoius school" required>
                </div>

                <div class="input-box">
                                                    <label for="class" class="mb-0 strong">Class</label>
                                                    <select name="prevclass" id="" class="form-control" value="">
                                                        <option name = "Nursery 1" value="Nursery 1"> Nursery 1 </option>
                                                        <option name = "Nursery 2" value="Nursery 2"> Nursery 2</option>
                                                        <option value="Reception">Reception</option>
                                                        <option name = "Primary 1" value="Primary 1"> Primary 1</option>
                                                        <option name = "Primary 2" value="Primary 2"> Primary 2 </option>
                                                        <option name = "Primary 3" value="Primary 3"> Primary 3</option>
                                                        <option name = "Primary 4" value="Primary 3"> Primary 4</option>
                                                        <option name = "Primary 5" value="Primary 3"> Primary 5</option>
                                                        <option name = "Primary 6" value="Primary 3"> Primary 6</option>
                                                        
                                                        <option name = "JSS 1" value="JSS 1"> JSS 1</option>
                                                        <option name = "JSS 2" value="JSS 2"> JSS 2</option>
                                                        <option name = "JSS 3" value="JSS 2"> JSS 3</option>
                                                        <option name = "SSS 1" value="JSS 2"> SSS 1</option>
                                                        <option name = "SSS 2" value="JSS 2"> SSS 2</option>
                                                        <option name = "SSS 3" value="JSS 2"> SSS 3</option>
                                                    </select>
                <div class="input-box ">


                <div class="input-box">
                    <label class="details">Headmaster/Principal Name</label>
                    <input type="text" name="headmaster" placeholder="Enter Name of Headmaster/Principal" required>
                </div>


                <label for="previous" class="mb-0 strong">School Address</label>
                <div class="input-box mb-2">
                    <input type="text" name="schooladd" id="" class="form-control" placeholder="School Address" required>
                </div>

                <label for="previous" class="mb-0 strong">Reason for transfer</label>
                <div class="input-box mb-2">
                <input type="text" name="reason" id="" class="form-control" placeholder="Reason for transfer" required>
                </div>
                                                   
                <div class="button">
                    <input type="submit" name = 'submit' value="Register">
                </div>
     </form>

                                    

                </div>
            </div>
        </div>
    </div>
</div>

</section>


<?php


include('layouts/footer.php');
include('layouts/scripts.php');

?>