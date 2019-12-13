<?php $this->load->view("admin/_partialsAdmin/header")?>
<!-- <?php var_dump($edit)?> -->

	<form method="post" class="form-horizontal formm">
		<div class="form-group">
			<label>Name</label>
			<input class="form-control" type="text" name="product_name" value="<?php echo $edit->product_name?>">
		</div>

		<div class="form-group">
			<label>Code</label>
			<input class="form-control" type="text" name="product_code" value="<?php echo $edit->product_code?>">
		</div>

		<div class="form-group">
			<label>Position Order</label>
			<input class="form-control" type="number" name="position_order" value="<?php echo $edit->position_order?>">
		</div>

		<div class="form-group">
			<label>Slug</label>
			<input class="form-control" type="text" name="product_slug" value="<?php echo $edit->product_slug?>">
		</div>

		<div class="form-group">
			<label>Collection</label>
			<input class="form-control" type="text" name="product_collection" value="<?php echo $edit->product_collection?>">
		</div>

		<div class="form-group">
			<label>Maximum Child Age</label>
			<input class="form-control" type="number" name="product_maximum_child_age" value="<?php echo $edit->product_maximum_child_age?>">
		</div>

		<div class="form-group">
			<label>Highlight Date</label>
			<input class="form-control" type="text" name="product_highlight_date" value="<?php echo $edit->product_highlight_date?>">
		</div>

		<div class="form-group">
			<label>Total Days</label>
			<input class="form-control" type="number" name="product_total_days" value="<?php echo $edit->product_total_days?>">
		</div>

		<div class="form-group">
			<label>Total Nights</label>
			<input class="form-control" type="number" name="product_total_nights" value="<?php echo $edit->product_total_nights?>">
		</div>

		<div class="form-group">
			<label>Starting Price</label>
			<input class="form-control" type="text" name="product_starting_price" value="<?php echo $edit->product_starting_price?>">
		</div>

		<div class="form-group">
			<label>Price Info</label>
			<textarea class="ckeditor" id="ckedtor" name="product_price_info"><?php echo $edit->product_price_info?></textarea>
		</div>

		<div class="form-group">
			<label>Transportation</label>
			<!-- <input class="form-control" type="text" name="id_ship_list" value="<?php echo $edit->id_ship_list?>"> -->
			<select class="form-control" name="id_ship_list">
				<?php foreach($dd_cruise as $cruise){?>
					<option value="<?php echo $cruise->id_ship_list?>" <?php if($edit->id_ship_list == $cruise->id_ship_list){ echo 'selected'; } ?> > <?php echo $cruise->name_ship_list?></option>
				<?php } ?>
			</select>
		</div>

		<div class="form-group">
			<label>Accomodation</label>
			<input class="form-control" type="text" name="product_accomodation" value="<?php echo $edit->product_accomodation?>">
		</div>

		<div class="form-group">
			<label>Included</label>
			<textarea class="ckeditor" id="ckedtor" name="product_included"><?php echo $edit->product_included?></textarea>
			<!-- <input class="form-control" type="text" name="product_included" placeholder="Insert here" value=""> -->
		</div>

		<div class="form-group">
			<label>Excluded</label>
			<textarea class="ckeditor" id="ckedtor" name="product_excluded"><?php echo $edit->product_excluded?></textarea>
			<!-- <input class="form-control" type="text" name="product_excluded" placeholder="Insert here" value=""> -->
		</div>

		<div class="form-group">
			<label>Terms</label>
			<textarea class="ckeditor" id="ckedtor" name="product_terms"><?php echo $edit->product_terms?></textarea>
			<!-- <input class="form-control" type="text" name="product_terms" placeholder="Input as the number" value="">-->
		</div>

		<div class="form-group">
			<label>thumbnail</label>
			<input class="form-control" type="file" name="product_thumbnail" value="<?php echo $edit->product_thumbnail?>">
		</div>

		<div class="form-group">
			<label>Flyer</label>
			<input class="form-control" type="text" name="product_flyer" value="<?php echo $edit->product_flyer?>">
		</div>

		<div class="form-group">
			<label>Status</label>
			<select class="form-control" name="id_status">
		      <option value="1" <?php if($edit->id_status == "1") echo "selected"?>>Draft</option>
		      <option value="2" <?php if($edit->id_status == "2") echo "selected"?>>Publish</option>
		    </select>
		</div>

		<div class="text-center">
			<button name="update_product" class="btn btn-primary">Save</button>
		</div>
	</form>

	<script type="text/javascript">
		var update_product = false;
	   	window.onbeforeunload = function () {
	      if (!update_product) {
	         return "Are you sure you want to navigate away from this page?";
	      }
	   	}
	</script>

<?php $this->load->view("admin/_partialsAdmin/footer")?>