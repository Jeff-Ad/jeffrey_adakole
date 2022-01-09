<?php include("layout/links.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include("layout/header.php"); ?>

</head>

<body>



	<?php
	include("layout/top_nav.php");
	?>
	<section id="breadcrumbs" class="breadcrumbs" style='margin-top:40px;'>
		<div class="container">
			<div class="d-flex justify-content-between align-items-center">
				<h2 class=" text-primary">
					<i class='fa fa-bed'></i> Request For Blood
				</h2>
				<ol>
					<li class=""><a href="index.php">Home</a></li>
					<li>Blood Request</li>
				</ol>
			</div>

		</div>
	</section>

	<div class="container" style='margin-top:10px;'>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6">
				<div class="row centered-form">
					<div class="col-xs-12 col-sm-12 col-md-11">
						<div class="card card-primary">
							<div class="card-heading">
								<h3 class="card-title text-center" style="padding:5px;font-size:16px;font-weight:bold"><span class="fa fa-bed mr-1 "> </span> Make Request</h3>
							</div>
							<div class="card-body">
								<p id="errorBox"></p>

								<?php
								class Action
								{
									private $db;

									public function __construct()
									{
										ob_start();
										include 'layout/db_connect.php';

										$this->db = $conn;
									}
									function __destruct()
									{
										$this->db->close();
										ob_end_flush();
									}
									function save_request()
									{
										extract($_POST);
										$data = " patient = '$patient' ";
										$data .= ", blood_group = '$blood_group' ";
										$data .= ", physician_name = '$physician_name' ";
										$data .= ", volume = '" . ($volume * 1000) . "' ";
										if (isset($status))
											$data .= ", status = '$status' ";

										if (empty($id)) {
											$i = 1;
											while ($i == 1) {
												$rand = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
												$ref_code = substr(str_shuffle($rand), 0, 8);
												$chk = $this->db->query("SELECT * FROM requests where ref_code = '$ref_code'")->num_rows;
												if ($chk <= 0) {
													$i = 0;
													$data .= ", ref_code = '$ref_code' ";
												}
											}
											$save = $this->db->query("INSERT INTO requests set $data");
										} else {
											$save = $this->db->query("UPDATE requests set $data where id = $id");
										}
										if ($save)
											return 1;
									}
								}
								?>
								<?php
								include("layout/db_connect.php");


								if (isset($_POST["submit"])) {
									$rand = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
									$ref_code = substr(str_shuffle($rand), 0, 8);
									$sql = "INSERT INTO requests (ref_code, patient, blood_group, volume, physician_name, status, date_created) VALUES ('$ref_code','{$_POST["patient"]}', '{$_POST["blood_group"]}', '{$_POST["volume"]}', '{$_POST["physician_name"]}', 0, NOW());";
									if ($conn->query($sql)) {

										echo '
								<div class="alert alert-success">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<strong>Success!</strong> Thanks for registering!!! We will get back to you soon! Your code.
								</div>
								
								
								
								';
										echo isset($ref_code) ? $ref_code : '';
									} else {
										echo '
							<div class="alert alert-danger">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<strong>Failed!</strong> something went wrong.
								</div>
								';
									}
								}
								?>

								<div class="form-group">

									<form autocomplete="off" method="post" action="" id="save_request" enctype=" multipart/form-data">

										<div name="ref_code"></div>

										<label class="control-label text-primary">Patient Name</label>
										<input type="text" placeholder="Patient Name" name="patient" required id="NAME" class="form-control input-sm">
								</div>


								<div class="form-group">
									<label class="control-label text-primary" for="blood_group">Blood Group</label>
									<select id="" name="blood_group" required class="form-control input-sm">
										<option value="">Select Blood</option>
										<option value="A+">A+</option>
										<option value="B+">B+</option>
										<option value="O+">O+</option>
										<option value="AB+">AB+</option>
										<option value="A-">A-</option>
										<option value="B-">B-</option>
										<option value="O-">O-</option>
										<option value="AB-">AB-</option>

									</select>
								</div>


								<div class="form-group">
									<label class="control-label text-primary">Unit Of Blood Needed</label>
									<input type="number" required name="volume" id="BUNIT" class="form-control" placeholder="In numeric form: for example: 1">
								</div>


								<div class="form-group">
									<label class="control-label text-primary">Doctor's Name</label>
									<input type="text" placeholder="Doctor Name" class="form-control input-sm" name="physician_name" id="DOC">
								</div>



								<div class="form-group">
									<button class="btn btn-primary" id="save_request" name="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> Request Now</button>
								</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<hr>

			<div class="col-md-6 " style='margin-top:51px;'>
				<img class="img-responsive" src="images/bloodr.jpg" alt=""><br>
				<h2 class="bg-danger text-white text-bold">Please Read Carefully?</h2><br />
				<div class="bg-info text-white text-bold">
					<p>Once request is successfully made, you will be given a CODE</p>
					<p>Your claim will be grannted after verifying your CODE in the hospital</p>
				</div>
			</div>
		</div>
	</div>

	</div>


	<?php include("layout/footer.php"); ?>
	<script>
		$(document).ready(
			function() {

				$("#BTN").click(function() {
					var NAME = $("#NAME").val();
					var BLOOD = $("#BLOOD").val();
					var BUNIT = $("#BUNIT").val();
					var HOSP = $("#HOSP").val();

					var DOC = $("#DOC").val();
					var RDATE = $("#RDATE").val();
					var CNAME = $("#CNAME").val();
					var EMAIL = $("#EMAIL").val();
					var CON1 = $("#CON1").val();
					var CON2 = $("#CON2").val();
					var REASON = $("#REASON").val();
					var PIC = $("#PIC").val();
					if ($("#NAME").val() == "") {
						$("#NAME").focus();
						$("#errorBox").html("<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Warning : </strong> Please Enter Full Name.</div>");
						return false;
					}

					if ($("#BLOOD").val() == "") {
						$("#BLOOD").focus();
						$("#errorBox").html("<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Warning : </strong> Please Select Blood.</div>");
						return false;
					}

					if ($("#BUNIT").val() == "") {
						$("#BUNIT").focus();
						$("#errorBox").html("<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Warning : </strong> Please Enter No Of Units.</div>");
						return false;
					}

					if (isNaN($("#BUNIT").val())) {
						$("#BUNIT").focus();
						$("#errorBox").html("<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Warning : </strong> Unit should be numeric.</div>");
						return false;
					}

					if ($("#HOSP").val() == "") {
						$("#HOSP").focus();
						$("#errorBox").html("<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Warning : </strong> Please Enter Hospital Name and full address.</div>");
						return false;
					}

					if ($("#CITY").val() == "") {
						$("#CITY").focus();
						$("#errorBox").html("<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Warning : </strong> Please Enter Your city name correctly.</div>");
						return false;
					}


					if ($("#DOC").val() == "") {
						$("#DOC").focus();
						$("#errorBox").html("<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Warning : </strong> Please Enter Docter Name.</div>");
						return false;
					}

					if ($("#RDATE").val() == "") {
						$("#RDATE").focus();
						$("#errorBox").html("<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Warning : </strong> Please Select the Blood Requiered Date .</div>");
						return false;
					}

					if ($("#CNAME").val() == "") {
						$("#CNAME").focus();
						$("#errorBox").html("<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Warning : </strong> Please Enter Contact Person Name.</div>");
						return false;
					}

					if ($("#CADDRESS").val() == "") {
						$("#CADDRESS").focus();
						$("#errorBox").html("<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Warning : </strong> Please Fill Full Address.</div>");
						return false;
					}
					if ($("#CON1").val() == "") {
						$("#CON1").focus();
						$("#errorBox").html("<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Warning : </strong> Please Enter your Mobile Number.</div>");
						return false;
					}

					if (isNaN($("#CON1").val())) {
						$("#CON1").focus();
						$("#errorBox").html("<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Warning : </strong> Mobile Number should be Numeric.</div>");
						return false;
					}

					if ($("#CON2").val() == "") {
						$("#CON2").focus();
						$("#errorBox").html("<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Warning : </strong> Please Enter Alternate Contact No.</div>");
						return false;
					}

					if (isNaN($("#CON2").val())) {
						$("#CON2").focus();
						$("#errorBox").html("<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Warning : </strong> Alternate Contact should be Numeric.</div>");
						return false;
					}

					if ($("#REASON").val() == "") {
						$("#REASON").focus();
						$("#errorBox").html("<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Warning : </strong> Please Enter the correct Reason for Blood.</div>");
						return false;
					}


				});
			});


		function validate(file) {
			var ext = file.split(".");
			ext = ext[ext.length - 1].toLowerCase();
			var arrayExtensions = ["jpg", "jpeg", "png", "bmp", "gif"];
			if (arrayExtensions.lastIndexOf(ext) == -1) {
				alert("Please upload image file only.");
				$("#PIC").val("");
			}
		}
	</script>
	<?php include "layout/scripts.php"; ?>
</body>

</html>