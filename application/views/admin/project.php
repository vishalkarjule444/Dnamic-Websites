<form action="<?=base_url()?>admin/save_project" method=
	"post" enctype="multipart/form-data">
	<div class="container">
		<div class="row">
			

	<div class="col-md-12 mb-4">
		<h3>Projects</h3>
	</div>

	<div class="col-md-12 mb-4">
		Enter the image
		<input type="file" value="<?=$proj[0]['project_image']?>" name="project_image" class="form-control">
	</div>

	<div class="col-md-6 mb-4">
		Enter the project Name
		<input type="text" value="<?=$proj[0]['project_title']?>" name="project_title" class="form-control">
	</div>

	<div class="col-md-6 mb-4">
		Enter the project description
		<input type="text" value="<?=$proj[0]['project_subtitle']?>" name="project_subtitle" class="form-control">
	</div>

	<div class="col-md-12 text-center mb-4">
		<button class="btn btn-primary">Save</button>
	</div>
		</div>
	</div>
</form>

<table class="table table-bordered table-sm text-center">
		<tr>
			<th>Action</th>
			<th>SN</th>
			<th>Title</th>
			<th>Sub-Title</th>
			<th>Image</th>
		</tr>
		<?php

		foreach($proj as $key => $row)
		{
			?>
			<tr>
				<td>
					<a href="<?=base_url()?>admin/edit_project/<?=$row['project_id']?>">
						<button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
					</a>
					
				</td>
				<td><?=$key+1?></td>
				<td><?=$row['project_title']?></td>
				<td><?=$row['project_subtitle']?></td>
				<td>
					<img src="<?=base_url()?>uploads/<?=$row['project_image']?>" width="100px">
				</td>
			</tr>
			<?php
		}
		?>
	</table>