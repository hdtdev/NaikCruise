<?php $this->load->view("_partials/header")?>
<!-- <?php echo var_dump($boarding)?> -->

<div class="text-center" style="margin-top: 5%;"><h3><strong><i><?php echo $boarding->title_blog ?></i></strong></h3></div>

<section>
	<div class="container">
		<div class="text-justify"><p><?php echo $boarding->content_blog ?></p></div>
	</div>	
</section>

<?php $this->load->view("_partials/footer")?>