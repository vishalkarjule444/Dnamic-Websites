<form action="<?=base_url()?>admin/update_team" method="post" enctype="multipart/form-data">
	<div class="container">
		<div class="row">
			<input type="hidden" name="person_id" value="<?=$info[0]['person_id']?>">
		<div class="col-md-12 mb-4">
			<h3>Our ProfessionalTeam</h3>
		</div>	
		<div class="col-md-8 mb-4">
			Person Image
			<input type="file" name="person_image" value="<?=$info[0]['person_image']?>" class="form-control">
		</div>
		<div class="col-md-2">
				<img src="<?=base_url()?>uploads/<?=$info[0]['person_image']?>" width="100%">
			</div>

		<div class="col-md-6 mb-4" >
			Person Name
			<input type="text" value="<?=$info[0]['person_name']?>" name="person_name" class="form-control">
		</div>

		<div class="col-md-6 mb-4" >
			Person Post
			<input type="text" name="person_post" value="<?=$info[0]['person_post']?>" class="form-control">
		</div>

		<div class="col-md-12 text-center">
			<button class="btn btn-primary">Edit Member Information</button>
		</div>
		</div>
	</div>
</form>