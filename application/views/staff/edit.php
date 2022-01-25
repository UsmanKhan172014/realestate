<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<form action="<?= base_url('index.php/Welcome/updateStaff/'.$user[0]['id']) ?>" method="post">
						<div class="card-header">
							<h1>Edit Staff Member</h1>
						</div>
						<div class="card-body">
							<?php echo validation_errors(); ?>
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" name="name" class="form-control" value="<?= $user[0]['name'] ?>">
							</div>
							<div class="form-group">
								<label for="cnic">CNIC</label>
								<input type="text" name="cnic" class="form-control" value="<?= $user[0]['cnic'] ?>">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" name="email" class="form-control" value="<?= $user[0]['email'] ?>">
							</div>
							<div class="form-group">
								<label for="name">Role</label>
								<select name="role" class="form-control" required>
									<option value="">Select One</option>
									<option value="admin" <?= $user[0]['role']=='admin'?"selected":"" ?>>Admin</option>
									<option value="marketing" <?= $user[0]['role']=='marketing'?"selected":"" ?>>Marketing</option>
									<option value="finance" <?= $user[0]['role']=='finance'?"selected":"" ?>>Finance</option>
								</select>
							</div>
						</div>
						<div class="card-footer">
							<input type="submit" class="btn btn-primary" value="Update">
						</div>
					</form>
				</div>
			</div>
		</div>
</div>
