<?php $this->load->view("_partials/header")?>

        <!--
        Home Slider
        ==================================== -->

    <section style="padding: 0px!important; margin-top: 51px!important;">
      <div class="slideshow-containerm">
        <?php foreach($mainBanner as $main):?>
          <a href="<?php echo $main->url_main_banner?>">
            <div class="mySlidesm fadem">
              <img class="imgm" src="<?php echo base_url('upload/').$main->image_main_banner?>" style="width:100%">
              <div data-wow-duration="700ms" data-wow-delay="200ms" class="textm wow bounceInDown animated"></div>
            </div>
          </a>
        <?php endforeach;?>

        <a class="prevm" onclick="plusSlidesm(-1)">&#10094;</a>
        <a class="nextm" onclick="plusSlidesm(1)">&#10095;</a>

        </div>

      
    </section>
    
        <!--
        End Home SliderEnd
        ==================================== -->

        <!-- 
        About Naik Cruise
        ==================================== -->
    <section id="aboutWakuwaku" class="aboutWakuwaku">
      <div class="container">
        <div class="sec-title-dark text-center wow fadeInDownBig" data-wow-duration ="500ms" data-wow-delay="100ms">
          <h1>About Naik Cruise</h1>
          <div> </div>
        </div>
        <div class="row">
          <div class="col-1 col-sm-1"></div>
          <div class="col-3 col-sm-3 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
            <img src="<?php echo base_url('img3/boat.png')?>" style="width: 75%; height: 70%; display: block; margin: auto;">
          </div>
          <div class="col-7 col-sm-7 wow fadeInRight" style="margin-top: 5%; " data-wow-duration="500ms" data-wow-delay="700ms">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
        </div>
        
      </div>
    </section>
        <!-- 
        End About Naik Cruise
        ==================================== -->

        <!--
        End Our Works
        ==================================== -->
    
        <!--
        Best Seller
        ==================================== -->    
    
    <section id="bestSeller" class="bestSeller">
      <div class="container">
        <div class="row">
    
          <div class="sec-title-dark text-center wow fadeInUp animated" data-wow-duration="700ms">
            <h1>Best Seller</h1>
          </div>
          
          <div class="sec-sub-title-dark text-center wow fadeInRight animated" data-wow-duration="500ms">
            <p>We give you the best offers from our best seller products</p>
          </div>
          <?php foreach($bestSeller as $best):?>
          <!-- single member -->
          <a href="<?php echo site_url('products/view/'.$best->id_product.'/'.$best->product_slug)?>">
            <figure class="team-member col-md-3 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms">
              <div class="member-thumb">
                <img src="<?php echo site_url('')."upload/". $best->product_thumbnail?>" alt="Product Thumbnail" class="img-responsive">
                <figcaption class="overlay">                  
                  <h5 style="text-align: left; margin-top: 40%;"><?php echo $best->name_ship_list?></h5>
                  <h5 style="text-align: left"><?php echo $best->product_highlight_date?></h5>
                  <p style="text-align: left"><?php echo "IDR " .$best->product_starting_price?></p>
                  <a href="<?php echo site_url('products/view/'.$best->id_product.'/'.$best->product_slug)?>"><button class="btn btn-all btn-block" style="margin-top: 7%;"><b>Details</b></button></a>
                </figcaption>
              </div>
              <a href="<?php echo site_url('products/view/'.$best->id_product.'/'.$best->product_slug)?>"><h4 style="overflow: hidden;text-overflow: ellipsis; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2;"><?php echo $best->product_name?></h4></a>
            </figure>
          </a>
          <!-- end single member -->
        <?php endforeach;?>






          
        </div>
      </div>
    </section>
    
        <!--
        End Best Seller
        ==================================== -->
  
  <!--
        Testimonials
        ==================================== -->
    
    <section id="brands" class="brands">
      <div class="container">
        <div class="row">
        
          <div class="sec-title-dark text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
            <h1>Testimonials</h1>
          </div>

        <div class="tslideshow-container">
          <?php foreach($testimonials as $testi):?>

            <div class="tmySlides">       
                <img style="width: 20%; min-width: 180px; height: 20%;border-radius: 100%;" src="<?php echo base_url('upload/').$testi->image_blog;?>"><br>
                <p class="tauthor" style="margin-top: 5%"><b><?php echo $testi->title_blog?> </b></p>
                <p style="margin-top: 2%"><i><?php echo $testi->content_blog?></i> </p>              
            </div>
          <?php endforeach;?>

          <a class="tprev" onclick="tplusSlides(-1)">❮</a>
          <a class="tnext" onclick="tplusSlides(1)">❯</a>

          </div>
            
        </div>
      </div>
    </section>
    
        <!--
        End Testimonials
        ==================================== -->


    <!-- Script main banner -->
    <script>
      var slideIndexm = 1;
      showSlidesm(slideIndexm);

      function plusSlidesm(n) {
        showSlidesm(slideIndexm += n);
      }

      function currentSlidem(n) {
        showSlidesm(slideIndexm = n);
      }

      function showSlidesm(n) {
        var i;
        var slides = document.getElementsByClassName("mySlidesm");
        if (n > slides.length) {slideIndexm = 1}    
        if (n < 1) {slideIndexm = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        slides[slideIndexm-1].style.display = "block";  
      }
    </script>

    
<?php $this->load->view("_partials/contact")?>
<?php $this->load->view("_partials/footer")?>