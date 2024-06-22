

<form action="<?=base_url()?>admin/save_company_info" method="post">
	<div class="container p-4" style="color: black;">
		<div class="row">
			<div class="col-md-12 mb-3">
				<h3>Company Information</h3>
			</div>
			<div class="col-md-6 mb-3">
				Enter Company Name
				<input type="text" name="company_name" value="<?=$info[0]['company_name']?>" class="form-control">
			</div>
			<div class="col-md-6 mb-3">
				Enter Company Mobile
				<input type="number" name="company_mobile" value="<?=$info[0]['company_mobile']?>" class="form-control">
			</div>
			<div class="col-md-6 mb-3">
				Enter Company Email
				<input type="text" name="company_email" value="<?=$info[0]['company_email']?>" class="form-control">
			</div>
			<div class="col-md-6 mb-3">
				Enter Company Address
				<input type="text" name="company_address" value="<?=$info[0]['company_address']?>" class="form-control">
			</div>
			<div class="col-md-6 mb-3">
				Enter Instagram Links
				<input type="text" name="instagram_link" value="<?=$info[0]['instagram_link']?>" class="form-control">
			</div>
			<div class="col-md-6 mb-3">
				Enter Facebook Links
				<input type="text" name="facebook_link" value="<?=$info[0]['facebook_link']?>" class="form-control">
			</div>
			<div class="col-md-6 mb-3">
				Enter Twitter Links
				<input type="text" name="twitter_link" value="<?=$info[0]['twitter_link']?>" class="form-control">
			</div>
			<div class="col-md-6 mb-3">
				Enter LinkedIn Links
				<input type="text" name="linkedin_link" value="<?=$info[0]['linkedin_link']?>" class="form-control">
			</div>
			<div class="col-md-6 mb-3">
				Enter Whatsapp Mobile
				<input type="text" name="whatsapp_mobile" value="<?=$info[0]['whatsapp_mobile']?>" class="form-control">
			</div>
			<div class="col-md-12 mb-3 text-center">
				<button class="btn btn-primary ">Save Information</button>
			</div>
		</div>
	</div>
</form>

