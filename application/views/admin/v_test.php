<!DOCTYPE html>

<html>

 <head>

  <title>Cara Upload Gambar Menggunakan ckeditor di PHP</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>

 </head>

 <body>

  <div class="container">

   <br />

   <h3 align="center">Cara Upload Gambar Menggunakan ckeditor di PHP</h3>

   <br />

   <div class="panel panel-default">

    <div class="panel-heading">

     <h3 class="panel-title">Cara Upload Gambar Menggunakan ckeditor di PHP</h3>

    </div>

    <div class="panel-body">

     <textarea name="content" id="content" class="form-control ckeditor"></textarea>

    </div>

   </div>

  </div>

 </body>

</html>

<script>

 CKEDITOR.replace( 'content', {
  height: 300,
  filebrowserUploadUrl: "<?php echo site_url('admin/test/')?>"
 });

</script>