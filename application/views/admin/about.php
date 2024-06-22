<form action="<?=base_url()?>admin/save_about" method="post" enctype="multipart/form-data">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-4">
				<h3>About Section</h3>
			</div>

			<div class="col-md-8 mb-4">
				Enter Image 1
				<input type="file" name="image1" class="form-control">
			</div>

			<div class="col-md-8 mb-4">
				Enter Image 2
				<input type="file" name="image2" class="form-control">
			</div>

			<div class="col-md-8 mb-4">
				Enter Image 3
				<input type="file" name="image3"class="form-control">
			</div>

			<div class="col-md-6">
				Enter Title
				<input type="text" name="about_title" class="form-control">
			</div>

			<div class="col-md-6 mb-4">
				Enter Sub Title
				<input type="text" name="about_subtitle" class="form-control">
			</div>

			<div class="col-md-6 mb-4"> 
				Enter About Content
				<input type="text" name="about_content" class="form-control">
			</div>

			<div class="col-md-6 mb-4">
				Enter Project Solution
				<input type="number" name="about_project_solution" class="form-control">
			</div>

			<div class="col-md-12 text-center">
				<button class="btn btn-primary">Save</button>
			</div>
		</div>
	</div>
</form>

<table class="table table-bordered table-sm text-center mt-5">
		<tr>
			<th>Action</th>
			<th>SN</th>
			<th>About Title</th>
			<th>About subtitle</th>
			<th>About Content</th>
			<th>About project solution</th>
			<th>Image 1</th>
			<th>Image 2</th>
			<th>Image 3</th>

		</tr>
		<?php

		foreach($abou as $key => $row)
		{
			?>
			<tr>
				<td>
					<a href="<?=base_url()?>admin/edit_about/<?=$row['about_id']?>">
						<button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
					</a>
				</td>
				<td><?=$key+1?></td>
				<td><?=$row['about_title']?></td>
				<td><?=$row['about_subtitle']?></td>
				<td><?=$row['about_content']?></td>
				<td><?=$row['about_project_solution']?></td>
				<td>
					<img src="<?=base_url()?>uploads/<?=$row['image1']?>" width="100px">
				</td>
				<td>
					<img src="<?=base_url()?>uploads/<?=$row['image2']?>" width="100px">
				</td>
				<td>
					<img src="<?=base_url()?>uploads/<?=$row['image3']?>" width="100px">
				</td>
			</tr>
			<?php
		}
		?>
	</table>