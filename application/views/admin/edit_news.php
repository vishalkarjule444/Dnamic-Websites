<form action="<?=base_url()?>admin/update_news" method="post" enctype="multipart/form-data">
	<input type="hidden" name="news_id" value="<?=$info[0]['news_id']?>">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-4">
				<h3>News And Articles</h3>
			</div>

			<div class="col-md-8 mb-4">
				Enter Image
				<input type="file" name="news_image" value="<?=$info[0]['news_image']?>" class="form-control">
			</div>
			<div class="col-md-2">
				<img src="<?=base_url()?>uploads/<?=$info[0]['news_image']?>" width="100%">
			</div>

			<div class="col-md-6 mb-4">
				Enter News Title
				<input type="text" name="news_title" value="<?=$info[0]['news_title']?>" class="form-control">
			</div>

			<div class="col-md-6 mb-4">
				Enter news subtitle
				<input type="text" value="<?=$info[0]['news_subtitle']?>" name="news_subtitle" class="form-control">
			</div>

			<div class="col-md-6 mb-4">
				Enter comment
				<input type="number"value="<?=$info[0]['news_comment']?>" name="news_comment" class="form-control">
			</div>
			<div class="col-md-12 text-center">
				<button class="btn btn-primary">Edit</button>
			</div>
		</div>
	</div>
</form>