<?php $this->load->view("_partials/header") ?>
<!-- <?php var_dump($ship)?> -->

    <section id="bestSeller" class="bestSeller ">
      <div class="container">
        <div class="row">

          <section style="margin-top: 5%">
            <div class="row">
                <div class="row wow fadeInRight animated" data-wow-duration="400ms" style="background-color: #f0f0f0; margin-top: 5px;">
                    <div class="col-md-1 list-ship-info"><h4>icon</h4></div>
                    <div class="col-md-9 list-ship-info"><h4>Ship Class</h4></div>
                    <div class="col-md-2 list-ship-info text-right"><h4>Premium Class</h4></div>
                </div>

                <div class="row wow fadeInRight animated" data-wow-duration="450ms" data-wow-delay="900ms" style="background-color: #f0f0f0; margin-top: 5px;">
                    <div class="col-md-1 list-ship-info"><h4>icon</h4></div>
                    <div class="col-md-9 list-ship-info"><h4>Passenger Capacity</h4></div>
                    <div class="col-md-2 list-ship-info text-right"><h4>13.543</h4></div>
                </div>

                <div class="row wow fadeInRight animated" data-wow-duration="500ms" data-wow-delay="900ms" style="background-color: #f0f0f0; margin-top: 5px;">
                    <div class="col-md-1 list-ship-info"><h4>icon</h4></div>
                    <div class="col-md-9 list-ship-info"><h4>Year Built</h4></div>
                    <div class="col-md-2 list-ship-info text-right"><h4>2002</h4></div>
                </div>

                <div class="row wow fadeInRight animated" data-wow-duration="550ms" data-wow-delay="900ms" style="background-color: #f0f0f0; margin-top: 5px;">
                    <div class="col-md-1 list-ship-info"><h4>icon</h4></div>
                    <div class="col-md-9 list-ship-info"><h4>Gross Tonnage</h4></div>
                    <div class="col-md-2 list-ship-info text-right"><h4>16.780</h4></div>
                </div>

                <div class="row wow fadeInRight animated" data-wow-duration="600ms" data-wow-delay="900ms" style="background-color: #f0f0f0; margin-top: 5px;">
                    <div class="col-md-1 list-ship-info"><h4>icon</h4></div>
                    <div class="col-md-9 list-ship-info"><h4>Decks</h4></div>
                    <div class="col-md-2 list-ship-info text-right"><h4>16</h4></div>
                </div>

                <div class="row wow fadeInRight animated" data-wow-duration="650ms" data-wow-delay="900ms" style="background-color: #f0f0f0; margin-top: 5px;">
                    <div class="col-md-1 list-ship-info"><h4>icon</h4></div>
                    <div class="col-md-9 list-ship-info"><h4>Cabins</h4></div>
                    <div class="col-md-2 list-ship-info text-right"><h4>57</h4></div>
                </div> 

                <div class="row wow fadeInRight animated" data-wow-duration="700ms" data-wow-delay="900ms" style="background-color: #f0f0f0; margin-top: 5px;">
                    <div class="col-md-1 list-ship-info"><h4>icon</h4></div>
                    <div class="col-md-9 list-ship-info"><h4>Number of Crews</h4></div>
                    <div class="col-md-2 list-ship-info text-right"><h4>13.243</h4></div>
                </div> 
            </div>
          </section>                      
        </div>
      </div>
    </section>

    <!-- Cabins -->
    <section id="bestSeller" class="bestSeller ">
      <div class="container">
        <div class="row">
    
          <div class="sec-title-dark text-center wow fadeInUp animated" data-wow-duration="700ms">
            <h2>Cabins</h2>            
          </div>        
        

          <section style="margin-top: 5%">
            <div class="row">
                <div class="col-md-4">
                    <div class="cabins-slideshow-container">
                        <div class="cabins-Slides cabins-fade">
                          <div class="cabins-numbertext">1 / 3</div>
                          <img class="cabins-img" src="<?php echo base_url('/wakuwaku/kcfinder/upload/images/img_sampel.png')?>" style="width:100%">
                          <div class="cabins-text">Caption Text</div>
                        </div>

                        <div class="cabins-Slides cabins-fade">
                          <div class="cabins-numbertext">2 / 3</div>
                          <img class="cabins-img" src="<?php echo base_url('/wakuwaku/kcfinder/upload/images/img_sampel.png')?>" style="width:100%">
                          <div class="cabins-text">Caption Two</div>
                        </div>

                        <div class="cabins-Slides cabins-fade">
                          <div class="cabins-numbertext">3 / 3</div>
                          <img class="cabins-img" src="<?php echo base_url('/wakuwaku/kcfinder/upload/images/img_sampel.png')?>" style="width:100%">
                          <div class="cabins-text">Caption Three</div>
                        </div>

                        <a class="cabins-prev" onclick="plusSlides1(-1)">&#10094;</a>
                        <a class="cabins-next" onclick="plusSlides1(1)">&#10095;</a>

                    </div>
                        <br>
                    <div style="text-align:center">
                        <span class="cabins-dot" onclick="currentSlide1(1)"></span> 
                        <span class="cabins-dot" onclick="currentSlide1(2)"></span> 
                        <span class="cabins-dot" onclick="currentSlide1(3)"></span> 
                    </div>
                </div>

                <div class="col-md-8">
                  <div class="det-tab">
                    <button id="defaultOpen" class="det-tablinks" onclick="openCity(event, 'satu')">Room Details</button>
                    <button class="det-tablinks" onclick="openCity(event, 'dua')">Beds Details</button>
                    <button class="det-tablinks" onclick="openCity(event, 'tiga')">Decks Plan</button>                    
                  </div>

                  <div id="satu" class="det-tabcontent" style="padding: 2%">           
                      <h5><b>Room Details</b></h5>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
                  </div>

                  <div id="dua" class="det-tabcontent" style="padding: 2%">           
                      <h5><b>Beds Details</b></h5>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
                  </div>

                  <div id="tiga" class="det-tabcontent" style="padding: 2%">           
                      <h5><b>This Room is Available in Decks :</b></h5>
                      <p>3, 5, 6, 7, 8, 9</p>
                  </div>
                  
                </div>              
            </div>
          </section>

                               
        </div>
      </div>
    </section>

    <section id="bestSeller" class="bestSeller ">
      <div class="container">
        <div class="row">
    
          <div class="sec-title-dark text-center wow fadeInUp animated" data-wow-duration="700ms">
            <h2>Facility</h2>
            <!-- <div class="devider-dark"><i class="fa fa-heart-o fa-lg"></i></div> -->
          </div>        
        
          <section style="margin-top: 5%">
            <div class="row">
                <div class="facility-slideshow-container">
                    <div class="facility-Slides facility-fade">
                      <div class="facility-numbertext">1 / 3</div>
                      <img class="facility-img" src="https://www.his-travel.co.id/files/Club%20Med/banner/banner-page-top%201.png?_t=1574828381" style="width:100%">
                      <div class="facility-text">Caption Text</div>
                    </div>

                    <div class="facility-Slides facility-fade">
                      <div class="facility-numbertext">2 / 3</div>
                      <img class="facility-img" src="https://www.his-travel.co.id/files/Club%20Med/banner/banner-page-top%201.png?_t=1574828381" style="width:100%">
                      <div class="facility-text">Caption Two</div>
                    </div>

                    <div class="facility-Slides facility-fade">
                      <div class="facility-numbertext">3 / 3</div>
                      <img class="facility-img" src="https://www.his-travel.co.id/files/Club%20Med/banner/banner-page-top%201.png?_t=1574828381" style="width:100%">
                      <div class="facility-text">Caption Three</div>
                    </div>

                    <a class="facility-prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="facility-next" onclick="plusSlides(1)">&#10095;</a>

                </div>
                    <br>
                <div style="text-align:center">
                    <span class="facility-dot" onclick="currentSlide(1)"></span> 
                    <span class="facility-dot" onclick="currentSlide(2)"></span> 
                    <span class="facility-dot" onclick="currentSlide(3)"></span> 
                </div>
            </div>
          </section>                      
        </div>
      </div>
    </section>

    <!--
        Products
        ==================================== -->    
    
    <section id="bestSeller" class="bestSeller">
      <div class="container">
        <div class="row">
    
          <div class="sec-title-dark text-center wow fadeInUp animated" data-wow-duration="700ms" style="margin-bottom: 2.5%">
            <h2>Related Products</h2>
          </div>
          
          <?php foreach($ship as $costa):?>
          <!-- single member -->
          <a href="<?php echo site_url('products/view/'.$costa->id_product.'/'.$costa->product_slug)?>">
            <figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
              <div class="member-thumb">
                <img src="<?php echo $costa->product_thumbnail?>" alt="Product Thumbnail" class="img-responsive">
                <figcaption class="overlay">                  
                  <h5 style="text-align: left; margin-top: 40%;"><?php echo $costa->name_ship_list?></h5>
                  <h5 style="text-align: left"><?php echo $costa->product_highlight_date?></h5>
                  <p style="text-align: left"><?php echo "IDR " .$costa->product_starting_price?></p>
                  <a href="<?php echo site_url('products/view/'.$costa->id_product.'/'.$costa->product_slug)?>"><button class="btn btn-all btn-block" style="margin-top: 7%;"><b>Details</b></button></a> 
                </figcaption>
              </div>
              <a href="<?php echo site_url('products/view/'.$costa->id_product.'/'.$costa->product_slug)?>"><h4><?php echo $costa->product_name?></h4></a>
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

    <!-- Slider cabins -->
    <script>
        var slideIndex1 = 1;
        showSlides1(slideIndex1);

        function plusSlides1(n1) {
          showSlides1(slideIndex1 += n1);
        }

        function currentSlide1(n1) {
          showSlides1(slideIndex1 = n1);
        }

        function showSlides1(n1) {
          var i1;
          var slides1 = document.getElementsByClassName("cabins-Slides");
          var dots1 = document.getElementsByClassName("cabins-dot");
          if (n1 > slides1.length) {slideIndex1 = 1}    
          if (n1 < 1) {slideIndex1 = slides1.length}
          for (i1 = 0; i1 < slides1.length; i1++) {
              slides1[i1].style.display = "none";  
          }
          for (i1 = 0; i1 < dots1.length; i1++) {
              dots1[i1].className = dots1[i1].className.replace(" cabins-active", "");
          }
          slides1[slideIndex1-1].style.display = "block";  
          dots1[slideIndex1-1].className += " cabins-active";
        }
    </script>

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

<?php $this->load->view("_partials/footer") ?>