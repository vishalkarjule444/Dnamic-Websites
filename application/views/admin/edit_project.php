<form action="<?=base_url()?>admin/update_project" method=
	"post" enctype="multipart/form-data">
	<input type="hidden" name="project_id" value="<?=$info[0]['project_id']?>">
	<div class="container">
		<div class="row">
			
	<div class="col-md-12 mb-4">
		<h3>Edit Projects</h3>
	</div>

	<div class="col-md-12 mb-4">
		Enter the image
		<input type="file" value="<?=$info[0]['project_image']?>" name="project_image" class="form-control">
	</div>

	<div class="col-md-6 mb-4">
		Enter the project Name
		<input type="text" value="<?=$info[0]['project_title']?>" name="project_title" class="form-control">
	</div>

	<div class="col-md-6 mb-4">
		Enter the project description
		<input type="text" value="<?=$info[0]['project_subtitle']?>" name="project_subtitle" class="form-control">
	</div>

	<div class="col-md-12 text-center mb-4">
		<button class="btn btn-primary">Update</button>
	</div>
		</div>
	</div>
</form>