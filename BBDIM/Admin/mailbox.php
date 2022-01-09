<?php include('db_connect.php'); ?>

<div class="container-fluid">

	<div class="col-lg-12">
		<div class="row mb-4 mt-4">
			<div class="col-md-12">

			</div>
		</div>
		<div class="row">
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-12">
				<div class="card">
					<div class="card-header text-danger">
						<b>Mailbox</b>
					</div>
					<div class="card-body">
						<table class="table table-condensed table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="">Name</th>
									<th class="">Message</th>
									<th class="">Email address</th>
									<th class="">Contact</th>
									<th class="">Date</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i = 1;
								$donors = $conn->query("SELECT * FROM messages order by name asc ");
								while ($row = $donors->fetch_assoc()) :

								?>
									<tr>
										<td class="text-center"><?php echo $i++ ?></td>
										<td class="">
											<p><b><?php echo ucwords($row['name']) ?></b></p>
										</td>
										<td class="">
											<p><b><?php echo $row['message'] ?></b></p>
										</td>
										<td class="">
											<p><b><?php echo $row['email']; ?></b></p>
										</td>
										<td class="">
											<p><b><?php echo $row['contact']; ?></b></p>
										</td>
										<td class="">
											<p><b><?php echo $row['logs']; ?></b></p>
										</td>
										<td class="text-center">


											<button class="btn btn-sm btn-outline-danger delete_message" type="button" data-id="<?php echo $row['id'] ?>"><i class="fas fa-trash"></i> Delete</button>
										</td>
									</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>

</div>
<style>
	td {
		vertical-align: middle !important;
	}

	td p {
		margin: unset
	}

	img {
		max-width: 100px;
		max-height: 150px;
	}
</style>
<script>
	$(document).ready(function() {
		$('table').dataTable()
	})


	$('.view_message').click(function() {
		uni_modal("View Messages", "view.php?id=" + $(this).attr('data-id'), "mid-large")

	})
	$('.delete_message').click(function() {
		_conf("Are you sure you want to delete this message?", "delete_message", [$(this).attr('data-id')])
	})

	function delete_message($id) {
		start_load()
		$.ajax({
			url: 'ajax.php?action=delete_message',
			method: 'POST',
			data: {
				id: $id
			},
			success: function(resp) {
				if (resp == 1) {
					alert_toast("Data successfully deleted", 'success')
					setTimeout(function() {
						location.reload()
					}, 1500)

				}
			}
		})
	}
</script>