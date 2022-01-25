<div class="container">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<form action="<?= base_url('index.php/Settings/imgUpload') ?>" enctype="multipart/form-data" method="post">
					<div class="card-header">
						<h1>Change Settings</h1>
					</div>
					<div class="card-body">
						<div class="form-group">
							<label for="sitename">Site Name</label>
							<input type="text" name="sitename" class="form-control" value="<?= getProductName() ?>">
						</div>
						<img src="<?= base_url().'public/uploads/'.getImage() ?>" width="200px" alt="">
						<div class="form-group">
							<label for="image">Image</label>
							<input type="file" name="image" class="form-control">
						</div>
					</div>
						<div class="card-footer">
							<input type="submit" class="btn btn-primary form-control" value="Save">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
