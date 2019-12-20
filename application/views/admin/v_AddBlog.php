<?php $this->load->view("admin/_partialsAdmin/header")?>

<form method="post" enctype="multipart/form-data" class="form-horizontal formm">

		<div class="form-group">
			<label>Title</label>
			<input class="form-control" type="text" placeholder="Input as the text" name="title_blog">
		</div>

		<div class="form-group">
			<label>Content</label>
			<textarea class="ckeditor" id="ckedtor" name="content_blog"></textarea>
		</div>

		<div class="form-group">
			<label>Category</label>
			<select class="form-control" name="id_category">
				<?php
					echo '<option value="">--choose category--</option>';
					foreach ($dd_category as $category) {
						echo '<option value="'.$category->id_category.'">'.$category->name_category.'</option>';
					}
				?>
			</select>
		</div>

		<div class="form-group">
			<label>Status</label>
			<select class="form-control" name="id_status">
				<?php
					echo '<option value="">--choose status--</option>';
					foreach ($dd_status as $status) {
						echo '<option value="'.$status->id_status.'">'.$status->name_status.'</option>';
					}
				?>
			</select>
		</div>

		<div class="form-group">
			<label>Thumbnail</label>
			<img src="http://placehold.it/100x100" id="showImgaeBlog" style="max-width:200px;max-height:200px;"/>
			<input style="margin-top: 1%" id="inputImageBlog" class="form-control" type="file" name="image_blog">
		</div>

		<div class="text-center">
			<button name="submit_blog" class="btn btn-primary">Save</button>
		</div>
	</form>
<?php $this->load->view("admin/_partialsAdmin/footer")?>

<script type="text/javascript">

function readURL(input) {
if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
        $('#showImgaeBlog').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
}
}

$("#inputImageBlog").change(function () {
readURL(this);
});
</script>