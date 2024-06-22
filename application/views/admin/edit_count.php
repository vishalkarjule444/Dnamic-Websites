<form action="<?=base_url()?>admin/update_count" method="post">
<input type="hidden" name="counter_id" value="<?=$info[0]['counter_id']?>">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-4">
				<h3>Counter</h3>	
			</div>

			<div class="col-md-6 mb-4">
				<input type="number" value="<?=$info[0]['counter_count']?>" name="counter_count" class="form-control">	
			</div>

			<div class="col-md-6 mb-4">
				<input type="text" value="<?=$info[0]['counter_desc']?>" name="counter_desc" class="form-control">	
			</div>

			<div class="col-md-12 mb-4 text-center">
				<button class="btn btn-primary">Update Counter</button>
			</div>
		</div>	
	</div>
</form>