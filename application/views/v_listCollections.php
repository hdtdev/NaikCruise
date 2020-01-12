<?php $this->load->view("_partials/header")?>
<!--
        Products
        ==================================== -->    
    
    <section id="bestSeller" class="bestSeller">
      <div class="container">
        <div class="row">
    
          <div class="sec-title-dark text-center wow fadeInUp animated" data-wow-duration="700ms">
            <h1>Collections</h1>
            <!-- <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div> -->
          </div>

          <div class="text-center" style="margin-bottom: 5%;">
            <?php foreach($collection as $coll):?>
            <a href="<?php echo site_url('products/collection/'.$coll->product_collection)?>"><button class="btn btn-all" style="margin-top: 7%;"><b><?php echo $coll->product_collection?></b></button></a>
            <?endforeach;?>
          </div>
          
          <?php foreach($viewCollection as $all):?>
          <!-- single member -->
          <a href="<?php echo site_url('products/view/'.$all->id_product.'/'.$all->product_slug)?>">
	          <figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
	            <div class="member-thumb">
	              <img src="<?php echo site_url('')."upload/". $all->product_thumbnail?>" alt="Product Thumbnail" class="img-responsive">
	              <figcaption class="overlay">	                
	                <h5 style="text-align: left; margin-top: 40%;"><?php echo $all->name_ship_list?></h5>
	                <h5 style="text-align: left"><?php echo $all->product_highlight_date?></h5>
	                <p style="text-align: left"><?php echo "IDR " .$all->product_starting_price?></p>
	                <a href="<?php echo site_url('products/view/'.$all->id_product.'/'.$all->product_slug)?>"><button class="btn btn-all btn-block" style="margin-top: 7%;"><b>Details</b></button></a> 
	              </figcaption>
	            </div>
	            <a href="<?php echo site_url('products/view/'.$all->id_product.'/'.$all->product_slug)?>"><h4 style="overflow: hidden;text-overflow: ellipsis; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2;"><?php echo $all->product_name?></h4></a>
	          </figure>
          </a>
          <!-- end single member -->
        <?php endforeach;?>
          
        </div>
      </div>
    </section>
    
        <!--
        Products End
        ==================================== -->

<?php $this->load->view("_partials/contact")?>
<?php $this->load->view("_partials/footer")?>