<?php $this->load->view("_partials/header")?>

<!-- <?php echo var_dump($listDream)?>
<hr>
<?php echo var_dump($listRoyal)?>
<hr>
<?php echo var_dump($listCosta)?>
<hr>
<?php echo var_dump($listNorwegian)?>
<hr>  -->

<section id="bestSeller" class="bestSeller">
      <div class="container">
        <div class="row">
    
          <div class="sec-title-dark text-center wow fadeInUp animated" data-wow-duration="700ms">
            <h1>Our Ships</h1>
          </div>
          
          <div class="sec-title-dark text-center wow fadeInRight animated" data-wow-duration="500ms">
            <p>Many option for you to choose cruise. Select cruise to see more details</p>
          </div>
		
          <section style="margin-top: 5%">
          	<div class="row">
          		<div class="det-tab">
					<button id="defaultOpen" class="det-tablinks" onclick="openCity(event, 'dreamCruise')">Dream Cruise</button>
					<button class="det-tablinks" onclick="openCity(event, 'royalCaribbeanCruise')">Royal Caribbean Cruise</button>
					<button class="det-tablinks" onclick="openCity(event, 'costaCruise')">Costa Cruise</button>
					<button class="det-tablinks" onclick="openCity(event, 'norwegianCruise')">Norwegian Cruise</button>
				</div>

				<div id="dreamCruise" class="det-tabcontent">						
					<div class="container" style="padding: 3%">
				        <div class="row">
				        	<h4>dream</h4>
				        	<?php foreach($listDream as $dream):?>
					          	<a href="<?php echo site_url('OurShips/view/'.$dream->slug_ship_list)?>" style="color: #575757!important;">
					          		<div class="col-sm-3 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
					            		<img src="<?php echo base_url('upload/').$dream->image_ship_list?>" style="width: 100%; height: 100%;">
					            		<div class="text-center"><h4><b><?php echo $dream->name_ship_list?></b></h4></div>
					          		</div>
					        	</a> 
				        	<?php endforeach;?>

				        	<!-- <a href="#" style="color: #575757!important;">
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
				          	</a>	 -->			        
				      	</div>
				    </div>		  
				</div>

				<div id="royalCaribbeanCruise" class="det-tabcontent">
					<div class="container" style="padding: 3%">
				        <div class="row">
				        	<h4>Royal</h4>
				        	<?php foreach($listRoyal as $royal):?>
					          	<a href="#" style="color: #575757!important;">
					          		<div class="col-sm-3 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
					            		<img src="<?php echo base_url('upload/').$royal->image_ship_list?>" style="width: 100%; height: 100%;">
					            		<div class="text-center"><h4><b><?php echo $royal->name_ship_list?></b></h4></div>
					          		</div>
					        	</a> 
				        	<?php endforeach;?>
				        	<!-- <a href="#" style="color: #575757!important;">
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
				          	</a> -->				        
				      	</div>
				    </div>				  
				</div>

				<div id="costaCruise" class="det-tabcontent">
					<div class="container" style="padding: 3%">
				        <div class="row">
				        	<h4>costa</h4>
				        	<?php foreach($listCosta as $costa):?>
					          	<a href="#" style="color: #575757!important;">
					          		<div class="col-sm-3 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
					            		<img src="<?php echo base_url('upload/').$costa->image_ship_list?>" style="width: 100%; height: 100%;">
					            		<div class="text-center"><h4><b><?php echo $costa->name_ship_list?></b></h4></div>
					          		</div>
					        	</a> 
				        	<?php endforeach;?>
				        	<!-- <a href="#" style="color: #575757!important;">
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
				          	</a> -->				        
				      	</div>
				    </div>				  
				</div>

				<div id="norwegianCruise" class="det-tabcontent">
					<div class="container" style="padding: 3%">
				        <div class="row">
				        	<h4>norwegian</h4>
				        	<?php foreach($listNorwegian as $norwegian):?>
					          	<a href="#" style="color: #575757!important;">
					          		<div class="col-sm-3 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
					            		<img src="<?php echo base_url('upload/').$norwegian->image_ship_list?>" style="width: 100%; height: 100%;">
					            		<div class="text-center"><h4><b><?php echo $norwegian->name_ship_list?></b></h4></div>
					          		</div>
					        	</a> 
				        	<?php endforeach;?>
				        	<!-- <a href="#" style="color: #575757!important;">
					          <div class="col-md-3 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
					            <img src="<?php echo base_url('img3/boat.png')?>" style="width: 100%; height: 100%;">
					            <div class="text-center"><h4><b>Norwegian Jade Cruise</b></h4></div>
					          </div>
				      		</a> -->
				      	</div>
				    </div>				  
				</div>
          		
          	</div>
          </section>		          
          
        </div>
      </div>
    </section>
<?php $this->load->view("_partials/footer")?>