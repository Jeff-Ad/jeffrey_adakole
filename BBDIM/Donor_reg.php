<?php

include("layout/links.php");

error_reporting(0); ?>
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
					<i class=' fa fa-edit'></i> New Donor Registration
				</h2>
				<ol>
					<li class=""><a href="index.php">Home</a></li>
					<li>Registration</li>
				</ol>
			</div>

		</div>
	</section>
	<div class="container" style='margin-top:20px;'>

		<div class="row">
			<div class="col-md-6 ">
				<div class="row centered-form">
					<div class="col-xs-12 col-sm-12 col-md-11">
						<?php
						include("layout/db_connect.php");


						if (isset($_POST["submit"])) {
							$sql = "INSERT INTO donors (blood_group, name, address, contact, email,  date_created) VALUES ('{$_POST["blood_group"]}','{$_POST["name"]}', '{$_POST["address"]}', '{$_POST["contact"]}', '{$_POST["email"]}',NOW());";
							if ($conn->query($sql)) {
								echo '
								<div class="alert alert-success">
									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
									<strong>Success!</strong> Thanks for registering!!! We will get back to you soon!.
								</div>
								
								
								';
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

						<div class="card card-primary">
							<div class="card-heading">
								<h3 class="card-title text-center" style="padding:5px;font-size:16px;font-weight:bold"><span class="fa fa-book mr-1 text-white"> </span>PLEASE FILL UP THE FORM COMPLETELY</h3>
							</div>
							<div class="card-body">
								<form method="post" action="Donor_reg.php" id="new-donor" autocomplete="off" role="form" enctype="multipart/form-data">
									<div class="form-group">
										<label class="control-label text-primary" for="name">Full Name</label>
										<input type="text" placeholder="Full Name" id="" name="name" required class="form-control input-sm">
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
										<label class="control-label text-primary" for="EMAIL">Email ID</label>
										<input type="email" name="email" id="" class="form-control" placeholder="Email Address" required>
									</div>
									<div class="form-group">
										<label class="control-label text-primary" for="address">Address</label>
										<textarea required name="address" id="ADDRESS" rows="5" class="form-control" placeholder="Full Address"></textarea>
									</div>


									<div class="form-group">
										<label class="control-label text-primary" for="contact">Contact</label>
										<input type="text" name="contact" id="contact" class="form-control" placeholder="example: 080-89-565" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" required>
									</div>


									<div class="form-group">
										<button class="btn btn-primary  save_donor" id="new_donor" name="submit"><i class="fa fa-paper-plane"></i>Registar Now</button>

									</div>
								</form>

							</div>


							</form>

						</div>
					</div>
				</div>


			</div>

			<div class="col-md-6 " style='margin-top:40px;'>
				<img class="img-responsive" src="images/donor.jpeg" alt=""><br>
				<h2 class="bg-danger text-white">Can I Donate?</h2><br />
				<!-- Justify -->
				<p class="text">
					Many potential blood donors have questions about their ability to donate because of medical conditions or other reasons.
					Find out if you are eligible to share your power through blood donation.
				</p>
				<a href="pricing.php" class="btn-get-started animate__animated animate__fadeInUp scrollto"><button class="btn btn-primary"><i class="fa fa-book mr-2"></i>Read More</button></a>
			</div>
		</div>



		<?php include "layout/scripts.php"; ?>



	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 text-align="justify" class="page-header text-primary">Why we need you to give blood ?</h2>
			</div>
			<div class="card col-md-6">


				<ul>
					<li class="text">Giving blood saves lives. The blood you give is a lifeline in an emergency and for people who need long-term treatments.</li>
					<li class="text">Many people would not be alive today if donors had not generously given their blood.</li>
					<li class="text">We need over 6,000 blood donations every day to treat patients in need across india. Which is why there’s always a need for people to give blood.</li>
					<li class="text">Each year we need approximately 200,000 new donors, as some donors can no longer give blood.</li>
					<li class="text">Most people between the ages of 17-65 are able to give blood.</li>
					<li class="text">Around half our current donors are over 45. That's why we need more young people (over the age of 17) to start giving blood, so we can make sure we have enough blood in the future.</li>
				</ul>
			</div>
			<div class="col-md-6">
				<img class="img-responsive" src="images/donor.png" alt="">
				<h2 class="bg-danger text-white text-center">Give Blood today! ...... Save a life today!!! </h2><br />

			</div>
		</div>
		<!-- /.row -->

		<hr>


		<!-- Call to Action Section -->
		<div class="well">
			<div class="row">
				<div class="col-md-8">
					<p>We expect your loyal feedback to improve our standard.For more details and any subject related queries..</p>
				</div>
				<div class="col-md-4">
					<a class="btn btn-primary btn-block" href="contact.php"><i class="fa fa-phone"></i> Call to Action</a>
				</div>
			</div>
		</div>

		<div class="modal fade" id="myModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<img src='' width="100%" height="100%" id='ModalImg'>
				</div>
			</div>
		</div>
	</div>


	<hr>
	<?php include("layout/footer.php"); ?>

</body>