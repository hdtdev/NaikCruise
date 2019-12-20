<?php $this->load->view("admin/_partialsAdmin/header")?>

<?php $param_id = $this->uri->segment(4) ?>

	<form method="post" enctype="multipart/form-data" class="form-horizontal formm">
		<h3 style="text-align: center;">Insert Image Slider</h3>
		<div class="form-group">
			<label>ID Product</label>
			<input class="form-control" type="number" name="id_product" value="<?php echo $param_id?>">
		</div>

		<div class="form-group">
			<label>Title Image</label>
			<input class="form-control" type="text" placeholder="Input as the text" name="title_image_slider_product">
		</div>

		<div class="form-group">
			<label>Image</label>
			<img src="http://placehold.it/100x100" id="showImgaeSlider" style="max-width:200px;max-height:200px;"/>
			<input style="margin-top: 1%" id="img_slider" class="form-control" type="file" name="image_image_slider_product">
		</div>

		<div class="form-group">
			<label>Position Order</label>
			<input class="form-control" type="number" name="position_order_image_slider_product" placeholder="Position order is optional">
		</div>

		<div class="form-group">
			<label>Is Active</label>
			<select class="form-control" name="id_status">
		      <option value="1">draft</option>
		      <option value="2">publish</option>
		    </select>
		</div>

		<div class="text-center">
			<button name="submit_imageSliderProduct" class="btn btn-primary">Save</button>
		</div>
	</form>
<?php $this->load->view("admin/_partialsAdmin/footer")?>

<script type="text/javascript">

function readURL(input) {
if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
        $('#showImgaeSlider').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
}
}

$("#img_slider").change(function () {
readURL(this);
});
</script>