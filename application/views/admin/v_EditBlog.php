<?php $this->load->view("admin/_partialsAdmin/header")?>

<form method="post" enctype="multipart/form-data" class="form-horizontal formm">

		<div class="form-group">
			<label>Title</label>
			<input class="form-control" type="text" name="title_blog" value="<?php echo $getData->title_blog?>">
		</div>

		<div class="form-group">
			<label>Slug</label>
			<input class="form-control" type="text" name="slug_blog" value="<?php echo $getData->slug_blog?>">
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

		<div class="form-group">
			<?php if (!empty($getData->image_blog)) {?>
				<img src="<?php echo $this->config->item('path').'/'.$getData->image_blog;?>" id="showImageBlog" style="max-width:200px;max-height:200px;" /><br/>
			<?php }else{?>
				<img src="http://placehold.it/100x100" id="showImageBlog" style="max-width:200px;max-height:200px;" /><br/>
			<?php ;} ?>
			<label>Image</label>
			<input class="form-control" type="file" id="inputImageBlog" name="image_blog">
			<input class="form-control" type="hidden" name="old_img_blog" value="<?php echo $getData->image_blog ?>">
		</div>

		<div class="text-center">
			<button name="update_blog" class="btn btn-primary">Save</button>
		</div>
	</form>
<?php $this->load->view("admin/_partialsAdmin/footer")?>

<script type="text/javascript">
function readURL(input) {
if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
        $('#showImageBlog').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
}
}

$("#inputImageBlog").change(function () {
readURL(this);
});
</script>