<div class="container p-4" style="color: black;">
	<form action="<?=base_url()?>admin/update_services" method="post">
		<input type="hidden" name="services_id" value="<?=$info[0]['services_id']?>">
		<div class="row">
			<div class="col-md-12">
				<h3>Edit Services</h3>
			</div>

			<div class="col-md-6 mb-4">
				Enter Title
				<input type="text" name="services_title" value="<?=$info[0]['services_title']?>" class="form-control">
			</div>

			<div class="col-md-6 mb-4">
				Enter Sub Title
				<input type="text" name="services_subtitle" value="<?=$info[0]['services_subtitle']?>" class="form-control">
			</div>

			<div class="col-md-12 text-center">
				<button class="btn btn-primary">Update Services</button>
			</div>
		</div>
		
	</form>
</div>