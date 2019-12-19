<?php $this->load->view("_partials/header")?>

<div class="text-center" style="margin-top: 5%;"><h1><strong><?php echo $getTicket->title_blog ?></strong></h1></div>

<hr style="margin-top: 5%">

<section>
	<div class="container">
		<div class="text-justify"><p><?php echo $getTicket->content_blog ?></p></div>
	</div>	
</section>

<?php $this->load->view("_partials/footer")?>