<form action="<?=base_url()?>admin/save_news" method="post" enctype="multipart/form-data">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-4">
				<h3>News And Articles</h3>
			</div>

			<div class="col-md-12 mb-4">
				Enter Image
				<input type="file" name="news_image" class="form-control">
			</div>

			<div class="col-md-6 mb-4">
				Enter News Title
				<input type="text" name="news_title" class="form-control">
			</div>

			<div class="col-md-6 mb-4">
				Enter news subtitle
				<input type="text" name="news_subtitle" class="form-control">
			</div>

			<div class="col-md-6 mb-4">
				Enter comment
				<input type="number" name="news_comment" class="form-control">
			</div>
			<div class="col-md-12 text-center">
				<button class="btn btn-primary">Save</button>
			</div>
		</div>
	</div>
</form>
<br>
<br>
<table class="table table-bordered table-sm text-center mt-5">
		<tr>
			<th>Action</th>
			<th>SN</th>
			<th>News Title</th>
			<th>News Subtitle</th>
			<th>News Comment</th>
			<th>News Image</th>
		</tr>
		<?php

		foreach($new as $key => $row)
		{
			?>
			<tr>
				<td>
					<a href="<?=base_url()?>admin/edit_news/<?=$row['news_id']?>">
						<button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
					</a>
				</td>
				<td><?=$key+1?></td>
				<td><?=$row['news_title']?></td>
				<td><?=$row['news_subtitle']?></td>
				<td><?=$row['news_comment']?></td>
				<td><?=$row['news_image']?></td>

				<td>
					<img src="<?=base_url()?>uploads/<?=$row['news_image']?>" width="100px">
				</td>
			</tr>
			<?php
		}
		?>
	</table>