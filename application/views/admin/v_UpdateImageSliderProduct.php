<?php $this->load->view("admin/_partialsAdmin/header")?>
<!-- <?php echo var_dump($updateImageSliderProduct)?> -->
<form method="post" class="form-horizontal formm">
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
			<label>Image</label>
			<input class="form-control" type="text" name="image_image_slider_product" value="<?php echo $updateImageSliderProduct->image_image_slider_product ?>">
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
