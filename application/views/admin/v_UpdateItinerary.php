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
			<?php if (!empty($updateItinerary->img_itinerary)) {?>
				<img src="<?php echo $this->config->item('path').'/'.$updateItinerary->img_itinerary;?>" id="showImageItinerary" style="max-width:200px;max-height:200px;" /><br/>
			<?php }else{?>
				<img src="http://placehold.it/100x100" id="showImageItinerary" style="max-width:200px;max-height:200px;" /><br/>
			<?php ;} ?>
			<label>Image</label>
			<input class="form-control" type="file" id="inputImageItinerary" name="img_itinerary">
			<input class="form-control" type="hidden" name="old_img_itinerary" value="<?php echo $updateItinerary->img_itinerary ?>">
		</div>

		<div class="text-center">
			<button name="update_itinerary" class="btn btn-primary">Save</button>
		</div>
	</form>

<?php $this->load->view("admin/_partialsAdmin/footer")?>

<script type="text/javascript">

function readURL(input) {
if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
        $('#showImageItinerary').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
}
}

$("#inputImageItinerary").change(function () {
readURL(this);
});
</script>