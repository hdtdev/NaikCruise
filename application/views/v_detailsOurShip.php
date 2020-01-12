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

    <section id="bestSeller" class="bestSeller">
      <div class="container">
        <div class="row">
    
          <div class="sec-title-dark text-center wow fadeInUp animated" data-wow-duration="700ms" style="margin-bottom: 2.5%">
            <h1>Products</h1>
          </div>
          
          <?php foreach($productShip as $productByShip):?>

          <a href="<?php echo site_url('products/view/'.$productByShip->id_product.'/'.$productByShip->product_slug)?>">
	          <figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
	            <div class="member-thumb">
	              <img src="<?php echo site_url('')."upload/". $productByShip->product_thumbnail?>" alt="Product Thumbnail" class="img-responsive">
	              <figcaption class="overlay">	                
	                <h5 style="text-align: left; margin-top: 40%;"><?php echo $productByShip->name_ship_list?></h5>
	                <h5 style="text-align: left"><?php echo $productByShip->product_highlight_date?></h5>
	                <p style="text-align: left"><?php echo "IDR " .$productByShip->product_starting_price?></p>
	                <a href="<?php echo site_url('products/view/'.$productByShip->id_product.'/'.$productByShip->product_slug)?>"><button class="btn btn-all btn-block" style="margin-top: 7%;"><b>Details</b></button></a> 
	              </figcaption>
	            </div>
	            <a href="<?php echo site_url('products/view/'.$productByShip->id_product.'/'.$productByShip->product_slug)?>"><h4 style="overflow: hidden;text-overflow: ellipsis; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2;"><?php echo $productByShip->product_name?></h4></a>
	          </figure>
          </a>
        <?php endforeach;?>
          
        </div>
      </div>
    </section>



<?php $this->load->view("_partials/contact")?>

<?php $this->load->view("_partials/footer")?>