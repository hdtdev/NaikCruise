<?php $this->load->view("admin/_partialsAdmin/header")?>

	<form method="post" enctype="multipart/form-data" class="form-horizontal formm">

		<div class="form-group">
			<label>Name</label>
			<input class="form-control" type="text" placeholder="Input as the text" name="name_main_banner">
		</div>

		<div class="form-group">
			<label>URL</label>
			<input class="form-control" type="text" name="url_main_banner" placeholder="Input as the text">
		</div>

		<div class="form-group" style="margin-top: 2%">
			<label>Image</label>
			<img src="http://placehold.it/100x100" id="showImgaeBanner" style="max-width:200px;max-height:200px;"/>
			<input style="margin-top: 1%" class="form-control" type="file" id="inputImageBanner" name="image_main_banner">
		</div>

		<div class="form-group">
			<label>Position Order</label>
			<input class="form-control" type="number" name="position_main_banner" placeholder="Input as the number">
		</div>

		<div class="form-group">
			<label>Caption (Optional)</label>
			<input class="form-control" type="text" name="caption_main_banner" placeholder="This field is optional, as the text">
		</div>

		<div class="form-group">
			<label>Status</label>
			<select class="form-control" name="id_status">
		      <option value="1">Draft</option>
		      <option value="2">Publish</option>
		    </select>
		</div>

		<div class="text-center">
			<button name="submit_main_banner" class="btn btn-primary">Save</button>
		</div>
	</form>

<?php $this->load->view("admin/_partialsAdmin/footer")?>

<script type="text/javascript">

function readURL(input) {
if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
        $('#showImgaeBanner').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
}
}

$("#inputImageBanner").change(function () {
readURL(this);
});
</script>