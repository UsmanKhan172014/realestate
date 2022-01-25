<div class="container mt-4">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
<!--					Please Login-->
					<center>
						<img src="<?= base_url().'public/uploads/'.getImage() ?>" width="200px" alt="">
						<h1><?= getProductName() ?></h1>
					</center>

				</div>
				<div class="card-body">
					<?php echo validation_errors(); ?>
					<form action="<?= base_url() ?>index.php/Authentication/login" method="post">
						<div class="form-group">
							<label>Enter the Email Address</label>
							<input type="email" class="form-control" name="email" value="<?= set_value('email') ?>">
						</div>
						<div class="form-group">
							<label>Enter the Password</label>
							<input type="password" class="form-control" name="password">
						</div>
						<input type="submit" value="Login" class="btn btn-primary form-control">
					</form>
				</div>
				<div class="card-footer">
					if you forget your password <a href="">click here</a>
				</div>
			</div>

		</div>
	</div>
</div>
