<form action="<?=base_url()?>admin/save_team" method="post" enctype="multipart/form-data">
	<div class="container">
		<div class="row">
		<div class="col-md-12 mb-4">
			<h3>Our ProfessionalTeam</h3>
		</div>	
		<div class="col-md-12 mb-4">
			Person Image
			<input type="file" name="person_image" class="form-control">
		</div>

		<div class="col-md-6 mb-4" >
			Person Name
			<input type="text" name="person_name" class="form-control">
		</div>

		<div class="col-md-6 mb-4" >
			Person Post
			<input type="text" name="person_post" class="form-control">
		</div>

		<div class="col-md-12 text-center">
			<button class="btn btn-primary">Save Member Information</button>
		</div>
		</div>
	</div>
</form>

<table class="table table-bordered table-sm text-center mt-5">
		<tr>
			<th>Action</th>
			<th>SN</th>
			<th>Person Name</th>
			<th>Person Post</th>
			<th>Person Image</th>
		</tr>
		<?php

		foreach($tea as $key => $row)
		{
			?>
			<tr>
				<td>
					<a href="<?=base_url()?>admin/edit_team/<?=$row['person_id']?>">
						<button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
					</a>
				</td>
				<td><?=$key+1?></td>
				<td><?=$row['person_name']?></td>
				<td><?=$row['person_post']?></td>
				<td>
					<img src="<?=base_url()?>uploads/<?=$row['person_image']?>" width="100px">
				</td>
			</tr>
			<?php
		}
		?>
	</table>