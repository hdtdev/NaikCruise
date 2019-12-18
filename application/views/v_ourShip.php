<?php $this->load->view("_partials/header")?>

<section id="bestSeller" class="bestSeller">
      <div class="container">
        <div class="row">
    
          <div class="sec-title-dark text-center wow fadeInUp animated" data-wow-duration="700ms">
            <h2>Our Ships</h2>
            <!-- <div class="devider-dark"><i class="fa fa-heart-o fa-lg"></i></div> -->
          </div>
          
          <div class="sec-title-dark text-center wow fadeInRight animated" data-wow-duration="500ms">
            <p>Many option for you to choose cruise. Select cruise to see more details</p>
          </div>
		
          <section style="margin-top: 5%">
          	<div class="row">
          		<div class="scrollmenuu det-tab">
					<button style="font-size: 1.0em!important;" id="defaultOpen" class="det-tablinks" onclick="openCity(event, 'dreamCruise')">Dream Cruise</button>
					<button style="font-size: 1.0em!important;" class="det-tablinks" onclick="openCity(event, 'royalCaribbeanCruise')">Royal Caribbean Cruise</button>
					<button style="font-size: 1.0em!important;" class="det-tablinks" onclick="openCity(event, 'costaCruise')">Costa Cruise</button>
					<button style="font-size: 1.0em!important;" class="det-tablinks" onclick="openCity(event, 'norwegianCruise')">Norwegian Cruise</button>
				</div>

				<div id="dreamCruise" class="det-tabcontent">						
					<div class="container" style="padding: 3%">
				        <div class="row">
				          	<a href="#" style="color: #575757!important;">
				          		<div class="col-sm-3 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
				            		<img src="<?php echo base_url('img3/boat.png')?>" style="width: 100%; height: 100%;">
				            		<div class="text-center"><h4><b>Genting Dream</b></h4></div>
				          		</div>
				        	</a> 

				        	<a href="#" style="color: #575757!important;">
					          <div class="col-sm-3 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
					            <img src="<?php echo base_url('img3/boat.png')?>" style="width: 100%; height: 100%;">
					            <div class="text-center"><h4><b>World Dream</b></h4></div>
					          </div>
				          	</a>

				          	<a href="#" style="color: #575757!important;">
					          <div class="col-sm-3 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
					            <img src="<?php echo base_url('img3/boat.png')?>" style="width: 100%; height: 100%;">
					            <div class="text-center"><h4><b>Explorer Dream</b></h4></div>
					          </div>
				          	</a>

				          	<a href="#" style="color: #575757!important;">
					          <div class="col-sm-3 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
					            <img src="<?php echo base_url('img3/boat.png')?>" style="width: 100%; height: 100%;">
					            <div class="text-center"><h4><b>Global Dream</b></h4></div>
					          </div>
				          	</a>				        
				      	</div>
				    </div>		  
				</div>

				<div id="royalCaribbeanCruise" class="det-tabcontent">
					<div class="container" style="padding: 3%">
				        <div class="row">
				        	<a href="#" style="color: #575757!important;">
					          <div class="col-md-3 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
					            <img src="<?php echo base_url('img3/boat.png')?>" style="width: 100%; height: 100%;">
					            <div class="text-center"><h4><b>Voyager Of The Seas</b></h4></div>
					          </div>
				      		</a>

				          	<a href="#" style="color: #575757!important;">
					          <div class="col-md-3 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
					            <img src="<?php echo base_url('img3/boat.png')?>" style="width: 100%; height: 100%;">
					            <div class="text-center"><h4><b>Quantum Of The Seas</b></h4></div>
					          </div>
				          	</a>				        
				      	</div>
				    </div>				  
				</div>

				<div id="costaCruise" class="det-tabcontent">
					<div class="container" style="padding: 3%">
				        <div class="row">
				        	<a href="#" style="color: #575757!important;">
					          <div class="col-md-3 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
					            <img src="<?php echo base_url('img3/boat.png')?>" style="width: 100%; height: 100%;">
					            <div class="text-center"><h4><b>Costa Fortuna Cruise</b></h4></div>
					          </div>
				          	</a>

				          	<a href="<?php echo site_url('ourships/costaneoromantica/8')?>" style="color: #575757!important;">
					          <div class="col-md-3 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms">
					            <img src="<?php echo base_url('img3/boat.png')?>" style="width: 100%; height: 100%;">
					            <div class="text-center"><h4><b>Costa Neo Romantica</b></h4></div>
					          </div>
				          	</a>				        
				      	</div>
				    </div>				  
				</div>

				<div id="norwegianCruise" class="det-tabcontent">
					<div class="container" style="padding: 3%">
				        <div class="row">
				        	<a href="#" style="color: #575757!important;">
					          <div class="col-md-3 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
					            <img src="<?php echo base_url('img3/boat.png')?>" style="width: 100%; height: 100%;">
					            <div class="text-center"><h4><b>Norwegian Jade Cruise</b></h4></div>
					          </div>
				      		</a>
				      	</div>
				    </div>				  
				</div>
          		
          	</div>
          </section>		          
          
        </div>
      </div>
    </section>
<?php $this->load->view("_partials/footer")?>