<?php $this->load->view("_partials/header")?>

<section class="bestSeller">
		<div class="container">
			<div class="sec-title-dark text-center wow fadeInUp animated" data-wow-duration="700ms">
            	<h1><?php echo $detailsShip->name_ship_list ?></h1>
          	</div>

	        <div style="margin-top: 5%" class="row">
	        	<div class="text-justify"><p><?php echo $detailsShip->content_ship_list ?></p></div>
	        </div>
        </div>
    </section>

<?php $this->load->view("_partials/contact")?>

<?php $this->load->view("_partials/footer")?>