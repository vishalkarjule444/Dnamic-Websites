<div class="container p-4" style="color: black;">
	<form action="<?=base_url()?>admin/update_feature" method="post" enctype="multipart/form-data">
		<input type="hidden" name="feature_id" value="<?=$info1[0]['feature_id']?>">
		<div class="row">
			<div class="col-md-12">
				<h3>Edit Feature</h3>
			</div>
			<div class="col-md-6 mb-4">
				Select Image
				<input type="file" name="feature_image" class="form-control">
			</div>
			<div class="col-md-2">
				<img src="<?=base_url()?>uploads/<?=$info1[0]['feature_image']?>" width="100%">
			</div>

			<div class="col-md-6 mb-4">
				Enter Title
				<input type="text" name="feature_title" value="<?=$info1[0]['feature_title']?>" class="form-control">
			</div>

			<div class="col-md-6 mb-4">
				Enter Sub Title
				<input type="text" name="feature_subtitle" value="<?=$info1[0]['feature_subtitle']?>" class="form-control">
			</div>

			<div class="col-md-12 text-center">
				<button class="btn btn-primary">Update Feature</button>
			</div>
		</div>
		
	</form>
</div>