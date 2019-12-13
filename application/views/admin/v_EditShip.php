<?php $this->load->view("admin/_partialsAdmin/header")?>
<?php echo var_dump($editShip)?>
<form method="post" class="form-horizontal formm">
		<h3 style="text-align: center;">Edit Ship</h3>
		<div class="form-group">
			<label>Ship Name</label>
			<input class="form-control" type="text" name="name_ship_list" value="<?php echo $editShip->name_ship_list?>">
		</div>

		<div class="form-group">
			<label>Image</label>
			<input class="form-control" type="file" name="image_ship_list" value="<?php echo $editShip->image_ship_list?>">
		</div>

		<div class="text-center">
			<button name="edit_ship" class="btn btn-primary">Save</button>
		</div>
	</form>
<?php $this->load->view("admin/_partialsAdmin/footer")?>