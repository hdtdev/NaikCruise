<?php $this->load->view("admin/_partialsAdmin/header")?>

<?php 
	if (isset($lastId->id_product)) {
		$oldId = intval($lastId->id_product);
		$newId = $oldId + 1;
	}else
	{
		$newId = 1;
	}
?>

	<form method="post" class="form-horizontal formm">
		<div class="form-group">
			<label>ID</label>
			<input class="form-control" type="text" name="id_product" value="<?php echo $newId?>">
		</div>

		<div class="form-group">
			<label>Name</label>
			<input class="form-control" type="text" placeholder="Input as the text" name="product_name">
		</div>

		<div class="form-group">
			<label>Code</label>
			<input class="form-control" type="text" name="product_code" placeholder="Input as the number">
		</div>

		<div class="form-group">
			<label>Position Order</label>
			<input class="form-control" type="number" name="position_order" placeholder="Position order is optional">
		</div>

		<div class="form-group">
			<label>Slug</label>
			<input class="form-control" type="text" name="product_slug" placeholder="Input slug without space">
		</div>

		<div class="form-group">
			<label>Collection</label>
			<input class="form-control" type="text" name="product_collection" placeholder="Input as the number">
		</div>

		<div class="form-group">
			<label>Maximum Child Age</label>
			<input class="form-control" type="number" name="product_maximum_child_age" placeholder="Input as the number">
		</div>

		<div class="form-group">
			<label>Highlight Date</label>
			<input class="form-control" type="text" name="product_highlight_date" placeholder="Input as the text">
		</div>

		<div class="form-group">
			<label>Total Days</label>
			<input class="form-control" type="number" name="product_total_days" placeholder="Input as the number">
		</div>

		<div class="form-group">
			<label>Total Nights</label>
			<input class="form-control" type="number" name="product_total_nights" placeholder="Input as the number">
		</div>

		<div class="form-group">
			<label>Starting Price</label>
			<input class="form-control" type="text" name="product_starting_price" placeholder="Default IDR">
		</div>

		<div class="form-group">
			<label>Price Info</label>
			<textarea id="editorr" name="product_price_info"></textarea>
		</div>

		<div class="form-group">
			<label>Transportation</label>
			<!-- <input class="form-control" type="text" name="id_ship_list" placeholder="What cruise type" value=""> -->
			<select class="form-control" name="id_ship_list">
				<?php
					echo '<option value="">--choose cruise--</option>';
					foreach ($cruises as $cruise) {
						echo '<option value="'.$cruise->id_ship_list.'">'.$cruise->name_ship_list.'</option>';
					}
				?>
			</select>
		</div>

		<div class="form-group">
			<label>Accomodation</label>
			<input class="form-control" type="text" name="product_accomodation" placeholder="Insert here" value="">
		</div>

		<div class="form-group">
			<label>Included</label>
			<textarea class="ckeditor" id="ckedtor" name="product_included"></textarea>
			<!-- <input class="form-control" type="text" name="product_included" placeholder="Insert here" value=""> -->
		</div>

		<div class="form-group">
			<label>Excluded</label>
			<textarea class="ckeditor" id="ckedtor" name="product_excluded"></textarea>
			<!-- <input class="form-control" type="text" name="product_excluded" placeholder="Insert here" value=""> -->
		</div>

		<div class="form-group">
			<label>Terms</label>
			<textarea class="ckeditor" id="ckedtor" name="product_terms"></textarea>
			<!-- <input class="form-control" type="text" name="product_terms" placeholder="Input as the number" value="">-->
		</div>

		<div class="form-group">
			<label>thumbnail</label>
			<input class="form-control" type="file" name="product_thumbnail">
		</div>

		<div class="form-group">
			<label>Flyer</label>
			<input class="form-control" type="text" name="product_flyer" placeholder="Type link here">
		</div>

		<div class="form-group">
			<label>Status</label>
			<select class="form-control" name="id_status">
		      <option value="1">Draft</option>
		      <option value="2">Publish</option>
		    </select>
		</div>

		<div class="text-center">
			<button name="submit_product" class="btn btn-primary">Save</button>
		</div>
	</form>

<?php $this->load->view("admin/_partialsAdmin/footer")?>