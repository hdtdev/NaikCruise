<?php $this->load->view("admin/_partialsAdmin/header")?>
<!-- <?php echo var_dump($updateImageSliderProduct)?> -->
<form method="post" enctype="multipart/form-data" class="form-horizontal formm">
	<h3 style="text-align: center;">Update Image Slider</h3>

		<div class="form-group">
			<label>ID</label>
			<input class="form-control" type="text" name="id_image_slider_product" value="<?php echo $updateImageSliderProduct->id_image_slider_product?>">
		</div>

		<div class="form-group">
			<label>Name</label>
			<input class="form-control" type="text" name="title_image_slider_product" value="<?php echo $updateImageSliderProduct->title_image_slider_product ?>">
		</div>

		<div class="form-group">
			<?php if (!empty($updateImageSliderProduct->image_image_slider_product)) {?>
				<img src="<?php echo $this->config->item('path').'/'.$updateImageSliderProduct->image_image_slider_product;?>" id="showImageSlider" style="max-width:200px;max-height:200px;" /><br/>
			<?php }else{?>
				<img src="http://placehold.it/100x100" id="showImageSlider" style="max-width:200px;max-height:200px;" /><br/>
			<?php ;} ?>
			<label>Image</label>
			<input class="form-control" type="file" id="inputImageSlider" name="image_image_slider_product">
			<input class="form-control" type="hidden" name="old_img_slider" value="<?php echo $updateImageSliderProduct->image_image_slider_product ?>">

			<!-- <?php if (!empty($updateImageSliderProduct->image_image_slider_product)) {?>
				<img src="<?php echo $this->config->item('path').'/'.$updateImageSliderProduct->image_image_slider_product;?>" id="showImageSlider" style="max-width:200px;max-height:200px;" /><br/>
			<?php }else{?>
				<img src="http://placehold.it/100x100" id="showImageSlider" style="max-width:200px;max-height:200px;" /><br/>
			<?php ;} ?>
			<label>Image</label>
			<input class="form-control" type="file" id="inputImageSlider" name="image_image_slider_product">
			<input class="form-control" type="hidden" name="old_img_slider" value="<?php echo $updateImageSliderProduct->image_image_slider_product ?>"> -->
		</div>

		<div class="form-group">
			<label>Position Order</label>
			<input class="form-control" type="text" name="position_order_image_slider_product" value="<?php echo $updateImageSliderProduct->position_order_image_slider_product?>">
		</div>

		<div class="form-group">
			<label>Is Active</label>
			<select class="form-control" name="id_status">
				<?php foreach ($dataStatus as $row){ ?>
		      		<option value="<?php echo $row->id_status?>" <?php if($updateImageSliderProduct->id_status == $row->id_status){ echo 'selected'; } ?> > <?php echo $row->name_status?> </option>
		      	<?php }?>
		    </select>
		</div>

		<div class="text-center">
			<button name="update_imageSliderProduct" class="btn btn-primary">Save</button>
		</div>
	</form>
<?php $this->load->view("admin/_partialsAdmin/footer")?>

<script type="text/javascript">

function readURL(input) {
if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
        $('#showImageSlider').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
}
}

$("#inputImageSlider").change(function () {
readURL(this);
});
</script>