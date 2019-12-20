<?php $this->load->view("admin/_partialsAdmin/header")?>
<form method="post" enctype="multipart/form-data" class="form-horizontal formm">
		<h3 style="text-align: center;">Insert New Ship (ON PROCESS)</h3>
		<div class="form-group">
			<label>Ship Name</label>
			<input class="form-control" type="text" name="name_ship_list" placeholder="input as a text">
		</div>

		<div class="form-group">
			<label style="width: 100%;">Image</label>
			<img src="http://placehold.it/100x100" id="showImageShip" style="max-width:200px;max-height:200px;"/>
			<input style="margin-top: 1%;" class="form-control" id="insertImageShip" type="file" placeholder="Input as the text" name="image_ship_list">
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