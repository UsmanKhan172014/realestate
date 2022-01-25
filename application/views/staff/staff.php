<div class="container">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10">
				<h1>Manage Staff</h1>
			</div>
			<div class="col-md-2">
				<a href="<?= base_url('index.php/Welcome/addstaff') ?>" class="btn btn-primary">Add Staff</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<thead>
						<th>Sr. No</th>
						<th>CNIC</th>
						<th>Name</th>
						<th>Email</th>
						<th>Role</th>
						<th>Action</th>
					</thead>
					<tbody>
					<?php
						foreach ($staff->result_array() as $user){
					?>
						<tr>
							<td><?= $user['id'] ?></td>
							<td><?= $user['cnic'] ?></td>
							<td><?= $user['name'] ?></td>
							<td><?= $user['email'] ?></td>
							<td><?= $user['role'] ?></td>
							<td>
								<a href="<?= base_url('index.php/Welcome/editStaff/'.$user['id']) ?>" class="btn btn-warning">Edit</a>
								<a href="<?= base_url('index.php/Welcome/deleteStaff/'.$user['id']) ?>" class="btn btn-danger">Delete</a>
							</td>
						</tr>

					<?php

						}
					?>

					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
