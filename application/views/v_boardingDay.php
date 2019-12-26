<?php $this->load->view("_partials/header")?>
<!-- <?php echo var_dump($boarding)?> -->
<section class="bestSeller">
		<div class="container">
			<div class="sec-title-dark text-center wow fadeInUp animated" data-wow-duration="700ms">
            	<h1><?php echo $boarding->title_blog ?></h1>
          	</div>

	        <div style="margin-top: 5%" class="row">
	        	<div class="text-justify"><p><?php echo $boarding->content_blog ?></p></div>
	        </div>
        </div>
    </section>

<?php $this->load->view("_partials/footer")?>