<?php $this->load->view("admin/_partialsAdmin/header")?>
<!-- <?php echo var_dump($editShip)?> -->
<form method="post" enctype="multipart/form-data" class="form-horizontal formm">
		<h3 style="text-align: center;">Edit Ship</h3>
		<div class="form-group">
			<label>Ship Name</label>
			<input class="form-control" type="text" name="name_ship_list" value="<?php echo $editShip->name_ship_list?>">
		</div>

		<div class="form-group">
			<label>Slug</label>
			<input class="form-control" type="text" name="slug_ship_list" value="<?php echo $editShip->slug_ship_list?>">
		</div>

		<div class="form-group">
			<label style="width: 100%;">Image</label>
			<?php if (!empty($editShip->image_ship_list)) {?>
				<img src="<?php echo $this->config->item('path').'/'.$editShip->image_ship_list;?>" id="showImageShip" style="max-width:200px;max-height:200px;" /><br/>
			<?php }else{?>
				<img src="http://placehold.it/100x100" id="showImageShip" style="max-width:200px;max-height:200px;" /><br/>
			<?php ;} ?>
			<input class="form-control" id="inputImageShip" type="file" name="image_ship_list">
			<input class="form-control" type="hidden" name="old_img_ship" value="<?php echo $editShip->image_ship_list?>">
		</div>

		<div class="form-group">
			<label>Content</label>
			<textarea class="ckeditor" id="ckedtor" name="content_ship_list"><?php echo $editShip->content_ship_list?></textarea>
		</div>

		<div class="form-group">
			<label>Brands</label>
			<!-- <input class="form-control" type="text" name="id_ship_list" placeholder="What cruise type" value=""> -->
			<select class="form-control" name="id_brands">
				<?php foreach($ddBrands as $brands){?>
					<option value="<?php echo $brands->id_brands?>" <?php if($editShip->id_brands == $brands->id_brands){ echo 'selected'; } ?> > <?php echo $brands->name_brand?></option>
				<?php } ?>
			</select>
		</div>

		<div class="form-group">
			<label>Status</label>
			<select class="form-control" name="id_status">
		      <option value="1" <?php if($editShip->id_status == "1") echo "selected"?>>Draft</option>
		      <option value="2" <?php if($editShip->id_status == "2") echo "selected"?>>Publish</option>
		    </select>
		</div>

		<div class="text-center">
			<button name="edit_ship" class="btn btn-primary">Save</button>
		</div>
	</form>
<?php $this->load->view("admin/_partialsAdmin/footer")?>

<script type="text/javascript">
function readURL(input) {
if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
        $('#showImageShip').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
}
}

$("#inputImageShip").change(function () {
readURL(this);
});
</script>