<?php $this->load->view("_partials/header")?>

<div class="text-center" style="margin-top: 5%;"><h3><strong><i><?php echo $getTicket->title_blog ?></i></strong></h3></div>

<section>
	<div class="container">
		<div class="text-justify"><p><?php echo $getTicket->content_blog ?></p></div>
	</div>	
</section>

<?php $this->load->view("_partials/footer")?>