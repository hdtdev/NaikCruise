<?php $this->load->view("_partials/header")?>
<!-- <h3>Test</h3>
<?php echo var_dump($destination);?> -->
	<section class="bestSeller">
		<div class="container">
			<div class="sec-title-dark text-center wow fadeInUp animated" data-wow-duration="700ms">
            	<h1>Destination</h1>
          	</div>

	        <div class="row">
	        	<?php foreach($destination as $row):?>
	            <div style="margin-top: 3%" class="col-md-3">
	                <!-- single member -->
	                    <figure class="team-member text-center wow fadeInUp animated" data-wow-duration="500ms">
	                      <div class="member-thumb" style="border: 1px solid #0D47A1; border-radius: 15px;">
	                        <img src="<?php echo base_url('')."upload/". $row->image_blog?>" class="img-responsive">
	                        <figcaption class="overlay" style="border-radius: 15px;">                                     
	                            <!-- <p style="margin-top: 40%">.</p>                         -->
	                            <button class="btn btn-all btn-block" style="margin-top: 80%"><b>Details</b></button>
	                        </figcaption>
	                      </div>
	                      <h5 style="padding: 3%;"><?php echo $row->title_blog?></h5>                          
	                    </figure>
	                <!-- End single member -->
	            </div>
	        <?php endforeach;?>
	        </div>
        </div>
    </section>
<?php $this->load->view("_partials/footer")?>