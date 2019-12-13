<?php $this->load->view("admin/_partialsAdmin/header")?>

<!-- <?php var_dump($updateItinerary)?> -->

	<!-- ambil parameter dari URI -->

	<form method="post" class="form-horizontal formm">

		<div class="form-group">
			<label>Day</label>
			<input class="form-control" type="text" name="day_itinerary" value="<?php echo $updateItinerary->day_itinerary?>">
		</div>

		<div class="form-group">
			<label>Name</label>
			<input class="form-control" type="text" name="name_itinerary" value="<?php echo $updateItinerary->name_itinerary?>">
		</div>

		<div class="form-group">
			<label>Note</label>
			<input class="form-control" type="text" name="note_itinerary" value="<?php echo $updateItinerary->note_itinerary?>">
		</div>

		<div class="form-group">
			<label>Image</label>
			<input class="form-control" type="text" name="img_itinerary" value="<?php echo $updateItinerary->img_itinerary?>">
		</div>

		<div class="text-center">
			<button name="update_itinerary" class="btn btn-primary">Save</button>
		</div>
	</form>

<?php $this->load->view("admin/_partialsAdmin/footer")?>