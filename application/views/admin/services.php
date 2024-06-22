<form action="<?=base_url()?>admin/save_services" method="post">
	<div class="container">
		<div class="row">
		<div class="col-md-12 mb-4">
		<h3>Update Services</h3>
	</div>

	<div class="col-md-6 mb-4">
		Enter Services Title
		<input type="text" name="services_title" value="<?=$serv[0]['services_title']?>" class="form-control">
	</div>

	<div class="col-md-6 mb-4">
		Enter Services Sub Title
		<input type="text" name="services_subtitle"  value="<?=$serv[0]['services_subtitle']?>" class="form-control">
	</div>

	<div class="col-md-12 mb-4 text-center">
		<button class="btn btn-primary">Save</button>
	</div>
</div>
</div>
</form>
<table class="table table-bordered table-sm text-center">
		<tr>
			<th></th>
			<th>SN</th>
			<th>Title</th>
			<th>Sub Title</th>

		</tr>
		<?php

		foreach($serv as $key => $row)
		{
			?>
			<tr>
				<td>
					<a href="<?=base_url()?>admin/edit_services/<?=$row['services_id']?>">
						<button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
					</a>
					<a href="<?=base_url()?>admin/delete_services/<?=$row['services_id']?>">
						<button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
					</a>
				</td>
				<td><?=$key+1?></td>
				<td><?=$row['services_title']?></td>
				<td><?=$row['services_subtitle']?></td>

			</tr>
			<?php
		}
		?>
	</table>
