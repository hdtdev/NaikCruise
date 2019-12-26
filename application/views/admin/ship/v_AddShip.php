<?php $this->load->view("admin/_partialsAdmin/header")?>
<!-- <?php echo var_dump($ddBrands)?> -->

<form method="post" enctype="multipart/form-data" class="form-horizontal formm">
		<h3 style="text-align: center;">Insert New Ship (ON PROCESS)</h3>
		<div class="form-group">
			<label>Ship Name</label>
			<input class="form-control" type="text" name="name_ship_list" placeholder="input as a text">
		</div>

		<div class="form-group">
			<label>Slug</label>
			<input class="form-control" type="text" name="slug_ship_list" placeholder="input as a text">
		</div>

		<div class="form-group">
			<label style="width: 100%;">Image</label>
			<img src="http://placehold.it/100x100" id="showImageShip" style="max-width:200px;max-height:200px;"/>
			<input style="margin-top: 1%;" class="form-control" id="insertImageShip" type="file" placeholder="Input as the text" name="image_ship_list">
		</div>

		<div class="form-group">
			<label>Content</label>
			<textarea id="editorr" name="content_ship_list"></textarea>
		</div>

		<div class="form-group">
			<label>Brands</label>
			<!-- <input class="form-control" type="text" name="id_ship_list" placeholder="What cruise type" value=""> -->
			<select class="form-control" name="id_brands">
				<?php
					echo '<option value="">--choose brand--</option>';
					foreach ($ddBrands as $brands) {
						echo '<option value="'.$brands->id_brands.'">'.$brands->name_brand.'</option>';
					}
				?>
			</select>
		</div>

		<div class="form-group">
			<label>Status</label>
			<select class="form-control" name="id_status">
		      <option value="1">Draft</option>
		      <option value="2">Publish</option>
		    </select>
		</div>

		<div class="text-center">
			<button name="submit_ship" class="btn btn-primary">Save</button>
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

$("#insertImageShip").change(function () {
readURL(this);
});
</script>