<form action="<?=base_url()?>admin/save_counter" method="post">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-4">
				<h3>Counter</h3>	
			</div>

			<div class="col-md-6 mb-4">
				<input type="number" value="<?=$count[0]['counter_count']?>" name="counter_count" class="form-control">	
			</div>

			<div class="col-md-6 mb-4">
				<input type="text" value="<?=$count[0]['counter_desc']?>" name="counter_desc" class="form-control">	
			</div>

			<div class="col-md-12 mb-4 text-center">
				<button class="btn btn-primary">Save Counter</button>
			</div>
		</div>	
	</div>
</form>
<br>
<table class="table table-bordered table-sm text-center">
		<tr>
			<th>Action</th>
			<th>SN</th>
			<th>Counter Count</th>
			<th>Counter Desc</th>

		</tr>
		<?php

		foreach($count as $key => $row)
		{
			?>
			<tr>
				<td>
					<a href="<?=base_url()?>admin/edit_count/<?=$row['counter_id']?>">
						<button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
					</a>
					
				</td>
				<td><?=$key+1?></td>
				<td><?=$row['counter_count']?></td>
				<td><?=$row['counter_desc']?></td>
			</tr>
			<?php
		}
		?>
	</table>