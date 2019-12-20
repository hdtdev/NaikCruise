<?php $this->load->view("admin/_partialsAdmin/header")?>

<form method="post" class="form-horizontal formm">

		<div class="form-group">
			<label>Title</label>
			<input class="form-control" type="text" name="title_blog" value="<?php echo $getData->title_blog?>">
		</div>

		<div class="form-group">
			<label>Content</label>
			<textarea class="ckeditor" id="ckedtor" name="content_blog"><?php echo $getData->content_blog?></textarea>			
		</div>

		<div class="form-group">
			<label>Category</label>
			<select class="form-control" name="id_category">
				<?php foreach($dd_category as $cat){?>
					<option value="<?php echo $cat->id_category?>" <?php if($getData->id_category == $cat->id_category){ echo 'selected'; } ?> > <?php echo $cat->name_category?></option>
				<?php } ?>
			</select>
		</div>

		<div class="form-group">
			<label>Status</label>
			<select class="form-control" name="id_status">
				<?php foreach($dd_status as $stat){?>
					<option value="<?php echo $stat->id_status?>" <?php if($getData->id_status == $stat->id_status){ echo 'selected'; } ?> > <?php echo $stat->name_status?></option>
				<?php } ?>
			</select>
		</div>

		<div class="text-center">
			<button name="update_blog" class="btn btn-primary">Save</button>
		</div>
	</form>
<?php $this->load->view("admin/_partialsAdmin/footer")?>