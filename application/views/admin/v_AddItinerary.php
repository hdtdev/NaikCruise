<?php $this->load->view("admin/_partialsAdmin/header")?>

	<!-- ambil parameter dari URI -->
	<?php $param_id = $this->uri->segment(4) ?>

	<form method="post" enctype="multipart/form-data" class="form-horizontal formm">
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

		<div class="form-group" style="margin-top: 2%">
			<label>Image</label>
			<img src="http://placehold.it/100x100" id="showImgaeItinerary" style="max-width:200px;max-height:200px;"/>
			<input style="margin-top: 1%" class="form-control" type="file" id="img_itinerary" name="img_itinerary" placeholder="Position order is optional">
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

<script type="text/javascript">

function readURL(input) {
if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
        $('#showImgaeItinerary').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
}
}

$("#img_itinerary").change(function () {
readURL(this);
});
</script>