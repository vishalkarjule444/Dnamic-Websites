<form action="<?=base_url()?>admin/update_logo" method="post" enctype="multipart/form-data">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-4">
				<h3>Enter The Logo Image</h3>
			</div>
			<div class="col-md-8 mb-4">
				<input type="file" name="logo_image" value="<?=$log[0]['logo_image']?>" class="form-control">
			</div>
			<div class="col-md-4">
				<img src="<?=base_url()?>uploads/<?=$log[0]['logo_image']?>" style="height:50px;">
			</div>
			<div class="col-md-12 mb-4 text-center">
				<button class="btn btn-primary" class="form-control">
					Update Logo
				</button>
			</div>
		</div>
	</div>
</form>