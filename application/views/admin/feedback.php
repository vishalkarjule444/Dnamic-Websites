<form action="<?=base_url()?>admin/update_feedback" method="post" enctype="multipart/form-data">
	<!-- <input type="hidden" name="feedback_id" value="<?=$feed[0]['feedback_id']?>"> -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Feedback</h3>
			</div>
			<div class="col-md-6 mb-4">
				<label>Feedback Image</label>
				<input type="file" name="feedback_image" class="form-control">
			</div>

			<div class="col-md-6 mb-4">
				<label>Feedback Title</label>
				<input type="text" name="feedback_title" value="<?=$feed[0]['feedback_title']?>" class="form-control">
			</div>

			<div class="col-md-6 mb-4">
				<label>Feedback Subtitle</label>				
				<input type="text" name="feedback_subtitle" value="<?=$feed[0]['feedback_subtitle']?>" class="form-control">
			</div>

			<div class="col-md-6 mb-4">
				<label>Feedback Person Name</label>

				<input type="text" name="feedback_personname"  value="<?=$feed[0]['feedback_personname']?>"  class="form-control">
			</div>

			<div class="col-md-6 mb-4">
				<label>Feedback Person Degree</label>
				<input type="text" name="feedback_persondegree"  value="<?=$feed[0]['feedback_persondegree']?>" class="form-control">
			</div>

			<div class="col-md-12 mb-4 text-center">
				<button class="btn btn-primary">Update</button>
			</div>
		</div>
	</div>
</form>
<br><br><br>
<form action="<?=base_url()?>admin/update_feedback2" method="post" enctype="multipart/form-data">
	<!-- <input type="hidden" name="feedback_id" value=""> -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Feedback2</h3>
			</div>
			<div class="col-md-6 mb-4">
				<label>Feedback2 Image</label>
				<input type="file" name="feedback2_image" class="form-control">
			</div>

			<div class="col-md-6 mb-4">
				<label>Feedback2 Title</label>
				<input type="text" name="feedback2_title" value="<?=$feed2[0]['feedback2_title']?>" class="form-control">
			</div>

			<div class="col-md-6 mb-4">
				<label>Feedback2 Subtitle</label>				
				<input type="text" name="feedback2_subtitle" value="<?=$feed2[0]['feedback2_subtitle']?>" class="form-control">
			</div>

			<div class="col-md-6 mb-4">
				<label>Feedback2 Person Name</label>

				<input type="text" name="feedback2_personname"  value="<?=$feed2[0]['feedback2_personname']?>" class="form-control">
			</div>

			<div class="col-md-6 mb-4">
				<label>Feedback2 Person Degree</label>
				<input type="text" name="feedback2_persondegree" value="<?=$feed2[0]['feedback2_persondegree']?>" class="form-control">
			</div>

			<div class="col-md-12 mb-4 text-center">
				<button class="btn btn-primary">Update</button>
			</div>
		</div>
	</div>
</form>