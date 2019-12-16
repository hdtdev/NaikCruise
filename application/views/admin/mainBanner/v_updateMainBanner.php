<?php $this->load->view("admin/_partialsAdmin/header")?>

 <!-- <?php var_dump($updateBanner)?>  -->

	<!-- ambil parameter dari URI -->

	<form method="post" enctype="multipart/form-data" class="form-horizontal formm">

		<div class="form-group">
			<label>Name</label>
			<input class="form-control" type="text" name="name_main_banner" value="<?php echo $updateBanner->name_main_banner?>">
		</div>

		<div class="form-group">
			<label>URL</label>
			<input class="form-control" type="text" name="url_main_banner" value="<?php echo $updateBanner->url_main_banner?>">
		</div>

		<div class="form-group">			
			<?php if (!empty($updateBanner->image_main_banner)) {?>
				<img src="<?php echo $this->config->item('path').'/'.$updateBanner->image_main_banner;?>" id="showImageBanner" style="max-width:200px;max-height:200px;" /><br/>
			<?php }else{?>
				<img src="http://placehold.it/100x100" id="showImageBanner" style="max-width:200px;max-height:200px;" /><br/>
			<?php ;} ?>
			<label>Image</label>
			<input class="form-control" type="file" id="inputImageBanner" name="image_main_banner">
			<input class="form-control" type="hidden" name="old_img_banner" value="<?php echo $updateBanner->image_main_banner ?>">
		</div>

		<div class="form-group">
			<label>Position Order</label>
			<input class="form-control" type="number" name="position_main_banner" value="<?php echo $updateBanner->position_main_banner?>">
		</div>

		<div class="form-group">
			<label>Caption (Optional)</label>
			<input class="form-control" type="text" name="caption_main_banner" value="<?php echo $updateBanner->caption_main_banner?>">
		</div>

		<div class="form-group">
			<label>Status</label>
			<select class="form-control" name="id_status">
		      <option value="1" <?php if($updateBanner->id_status == "1") echo "selected"?>>Draft</option>
		      <option value="2" <?php if($updateBanner->id_status == "2") echo "selected"?>>Publish</option>
		    </select>
		</div>

		<div class="text-center">
			<button name="update_banner" class="btn btn-primary">Save</button>
		</div>
	</form>

<?php $this->load->view("admin/_partialsAdmin/footer")?>

<script type="text/javascript">

function readURL(input) {
if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
        $('#showImageBanner').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
}
}

$("#inputImageBanner").change(function () {
readURL(this);
});
</script>