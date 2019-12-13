<?php $this->load->view("admin/_partialsAdmin/header")?>

<form method="post" class="form-horizontal formm">
		<h3 style="text-align: center;">Insert New Ship</h3>
		<div class="form-group">
			<label>Ship Name</label>
			<input class="form-control" type="text" name="name_ship_list" placeholder="input as a text">
		</div>

		<div class="form-group">
			<label>Image</label>
			<input class="form-control" type="file" placeholder="Input as the text" name="image_ship_list">
		</div>

		<div class="text-center">
			<button name="submit_ship" class="btn btn-primary">Save</button>
		</div>
	</form>


<?php $this->load->view("admin/_partialsAdmin/footer")?>
