<div class="container">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">

					<form action="<?= base_url('index.php/Welcome/savestaff') ?>" method="post">
						<div class="card-header">
							<h1>Add New Staff Member</h1>
						</div>
						<div class="card-body">
							<?php echo validation_errors(); ?>
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" name="name" class="form-control">
							</div>
							<div class="form-group">
								<label for="cnic">CNIC</label>
								<input type="text" name="cnic" class="form-control">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" name="email" class="form-control">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="password" class="form-control">
							</div>
							<div class="form-group">
								<label for="name">Role</label>
								<select name="role" class="form-control" required>
									<option value="">Select One</option>
									<option value="admin">Admin</option>
									<option value="marketing">Marketing</option>
									<option value="Finance">Finance</option>
								</select>
							</div>
						</div>
						<div class="card-footer">
							<input type="submit" class="btn btn-primary" value="Add">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
