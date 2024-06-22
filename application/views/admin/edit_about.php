<form action="<?=base_url()?>admin/update_about" method="post" enctype="multipart/form-data">
	<input type="hidden" name="about_id" value="<?=$info[0]['about_id']?>">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-4">
				<h3>About Section</h3>
			</div>

			<div class="col-md-8 mb-4">
				Enter Image 1
				<input type="file" name="image1"  value="<?=$info[0]['image1']?>" class="form-control">
			</div>
			<div class="col-md-2">
				<img src="<?=base_url()?>uploads/<?=$info[0]['image1']?>" width="100%">
			</div>
			<div class="col-md-8 mb-4">
				Enter Image 2
				<input type="file"  value="<?=$info[0]['image2']?>" name="image2" class="form-control">
			</div>
			<div class="col-md-2">
				<img src="<?=base_url()?>uploads/<?=$info[0]['image2']?>" width="100%">
			</div>

			<div class="col-md-8 mb-4">
				Enter Image 3
				<input type="file"  value="<?=$info[0]['image3']?>" name="image3" class="form-control">
			</div>
			<div class="col-md-2">
				<img src="<?=base_url()?>uploads/<?=$info[0]['image3']?>" width="100%">
			</div>

			<div class="col-md-6">
				Enter Title
				<input type="text" value="<?=$info[0]['about_title']?>" name="about_title" class="form-control">
			</div>

			<div class="col-md-6 mb-4">
				Enter Sub Title
				<input type="text" value="<?=$info[0]['about_subtitle']?>" name="about_subtitle" class="form-control">
			</div>

			<div class="col-md-6 mb-4"> 
				Enter About Content
				<input type="text" value="<?=$info[0]['about_content']?>" name="about_content" class="form-control">
			</div>

			<div class="col-md-6 mb-4">
				Enter Project Solution
				<input type="number" value="<?=$info[0]['about_project_solution']?>" name="about_project_solution" class="form-control">
			</div>

			<div class="col-md-12 text-center">
				<button class="btn btn-primary mb-4">Edit</button>
			</div>
		</div>
	</div>
</form>

