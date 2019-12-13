<?php $this->load->view("admin/_partialsAdmin/header")?>

	<!-- ambil parameter dari URI -->
	<?php $param_id = $this->uri->segment(4) ?>

	<form method="post" class="form-horizontal formm">
		<div class="form-group">
			<label>ID Product</label>
			<input class="form-control" type="number" name="id_product" value="<?php echo $param_id?>">
		</div>

		<div class="form-group">
			<label>Day</label>
			<input class="form-control" type="text" placeholder="Input as the text" name="day_itinerary">
		</div>

		<div class="form-group">
			<label>Name</label>
			<input class="form-control" type="text" name="name_itinerary" placeholder="Input as the number">
		</div>

		<div class="form-group">
			<label>Image</label>
			<input class="form-control" type="text" name="img_itinerary" placeholder="Position order is optional">
		</div>

		<div class="form-group">
			<label>Note</label>
			<input class="form-control" type="text" name="note_itinerary" placeholder="This field is optional">
		</div>

		<div class="text-center">
			<button name="submit_itinerary" class="btn btn-primary">Save</button>
		</div>
	</form>

<?php $this->load->view("admin/_partialsAdmin/footer")?>