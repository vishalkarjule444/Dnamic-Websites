<form action="<?=base_url()?>admin/save_feature" method="post" enctype="multipart/form-data">
	<div class="container">
		<div class="row">
	<div class="col-md-12">
		<h3>Features</h3>
	</div>
	<div class="col-md-6 mb-3">
		Enter image
		<input type="file" name="feature_image" class="form-control">
	</div>
	
	<div class="col-md-6" mb-3>
		Enter Title
		<input type="text" name="feature_title" class="form-control">
	</div>
	<div class="col-md-6" mb-3>
		Enter subtitle
		<input type="text" name="feature_subtitle" class="form-control">
	</div>
	<div class="col-md-12 mb-3 mt-4 text-center">
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
			<th>Sub Title</th>
			<th>Image</th>

		</tr>
		<?php

		foreach($feat as $key => $row)
		{
			?>
			<tr>
				<td>
					<a href="<?=base_url()?>admin/edit_feature/<?=$row['feature_id']?>">
						<button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
					</a>
					<a href="<?=base_url()?>admin/delete_feature/<?=$row['feature_id']?>">
						<button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
					</a>
				</td>
				<td><?=$key+1?></td>
				<td><?=$row['feature_title']?></td>
				<td><?=$row['feature_subtitle']?></td>
				<td>
					<img src="<?=base_url()?>uploads/<?=$row['feature_image']?>" width="100px">
				</td>
			</tr>
			<?php
		}
		?>
	</table>