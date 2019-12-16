<?php $this->load->view("_partials/header")?>

	<section id="bestSeller" class="bestSeller ">
      <div class="container">
        <div class="row">          
        
          <section style="margin-top: 1%">
            <div class="row">            	
                <div class="facility-slideshow-container">
                	<?php foreach ($viewImageSlider as $row):?>              	
	                    <div class="facility-Slides facility-fade">
	                      <img class="facility-img" src="<?php echo $row->image_image_slider_product?>" style="width:100%">
	                      <div class="facility-text"><?php echo $row->title_image_slider_product?></div>
	                    </div>
	                <?php endforeach;?>                  
                    <a class="facility-prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="facility-next" onclick="plusSlides(1)">&#10095;</a>

                </div>                
                    <br>
            </div>
          </section>                      
        </div>
      </div>
    </section>
		
		<div class="sec-title-dark text-center wow fadeInUp animated" data-wow-duration="700ms">
            <h2><?php echo $viewSlug->product_name?></h2>
        </div>

	<section class="stnd">		       
    	<div class="container">
      		<div class="det-tab">
				<button id="defaultOpen" class="det-tablinks" onclick="openCity(event, 'itinerary')">Itinerary</button>
				<button class="det-tablinks" onclick="openCity(event, 'tourDetails')">Tour Details</button>
				<button class="det-tablinks">Download Flyer</button>
			</div>

				<div id="itinerary" class="det-tabcontent">
					<div style="margin-top: 2%"></div>
				  	<?php foreach($viewItineraries as $itin):?>
				  	<div class="row">
				  		<div class="col-sm-2" style="display: inline-block;">
				  			<img src="<?php echo $itin->img_itinerary?>" width="100%">
				  		</div>
					  	<div class="col-sm-9" style="display: inline-block;">
					  		<div style="margin-top: 1%">
					  			<h4><strong>Day : <?php echo $itin->day_itinerary?></strong></h4>
					  		</div>					  		

					  		<div style="margin-top: 1%">
					  			<h5><?php echo $itin->note_itinerary?></h5>
					  		</div>
					  	</div>					  	
				  </div>
				  <hr>
				  <?php endforeach;?>
				</div>

				<div id="tourDetails" class="det-tabcontent">
					<div class="row" style="margin-top: 1%">
						<div class="col-sm-2">Tour Code</div> <div class="col-sm-10"><?php echo $viewSlug->product_code?></div>
					</div>
					<hr>
					<div class="row">
						<div class="col-sm-2">Max Age Child</div> <div class="col-sm-10"><?php echo $viewSlug->product_maximum_child_age ." years old"?></div>
					</div>
					<hr>
					<div class="row">
						<div class="col-sm-2">Highlight Date</div> <div class="col-sm-10"><?php echo $viewSlug->product_highlight_date?></div>
					</div>
					<hr>
					<div class="row">
						<div class="col-sm-2">Prince Info</div> <div class="col-sm-10"><?php echo $viewSlug->product_price_info?></div>
					</div>
					<hr>
					<div class="row">
						<div class="col-sm-2">Total Days</div> <div class="col-sm-10"><?php echo $viewSlug->product_total_days ." day / ". $viewSlug->product_total_nights ." nights"?></div>
					</div>
					<hr>
					<div class="row">
						<div class="col-sm-2">Cruise</div> <div class="col-sm-10"><?php echo $viewSlug->name_ship_list?></div>
					</div>
					<hr>
					<div class="row">
						<div class="col-sm-2">Accomodation</div> <div class="col-sm-10"><?php echo $viewSlug->product_accomodation?></div>
					</div>
					<hr>
					<div class="row">
						<div class="col-sm-2">Included</div> <div class="col-sm-10"><?php echo $viewSlug->product_included?></div>
					</div>
					<hr>
					<div class="row">
						<div class="col-sm-2">Excluded</div> <div class="col-sm-10"><?php echo $viewSlug->product_excluded?></div>
					</div>
					<hr>
					<div class="row">
						<div class="col-sm-2">Terms & Condition</div> <div class="col-sm-10"><?php echo $viewSlug->product_terms?></div>
				  	</div>
				  	<hr>

				</div>

      	</div>
	</section>

	<section class="stnd">		       
    	<div class="container">
    		<div style="text-align: center; background-color: #0D47A1; padding: 2%; color: white;">
    			<h3><strong>CALL CENTER</strong></h1>
    			<h4>SENIN - SABTU : 09.00 - 18.00</h4>
    			<h1><strong>021 - 574 - 1701</strong> </h1>
    		</div>
      	</div>
	</section>

	<!--  -->


<!-- slider facility -->
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("facility-Slides");
          var dots = document.getElementsByClassName("facility-dot");
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" facility-active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " facility-active";
        }
    </script>
<?php $this->load->view("_partials/footer")?>