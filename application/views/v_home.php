<?php $this->load->view("_partials/header")?>
  
<!-- <?php var_dump($bestSeller)?> -->
        <!--
        Home Slider
        ==================================== -->
    
    <section id="slider">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      
        <!-- Indicators bullet -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>
        <!-- End Indicators bullet -->        
        
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          
          <!-- single slide -->
          <div class="item active" style="background-image: url(img3/banner.jpg);">
            <div class="carousel-caption">
              <h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated"><span>Wakuwaku</span>!</h2>
              <h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><span class="color">/let's</span> sailing with us.</h3>
              <p data-wow-duration="1000ms" class="wow slideInRight animated">Get the best offers</p>
              
              <ul class="social-links text-center">
                <li><a href=""><i class="fa fa-twitter fa-lg"></i></a></li>
                <li><a href=""><i class="fa fa-facebook fa-lg"></i></a></li>
                <li><a href=""><i class="fa fa-google-plus fa-lg"></i></a></li>
                <li><a href=""><i class="fa fa-dribbble fa-lg"></i></a></li>
              </ul>
            </div>
          </div>
          <!-- end single slide -->
          
          <!-- single slide -->
          <div class="item" style="background-image: url(img3/banner.jpg);">
            <div class="carousel-caption">
              <h1 data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated"><span>Contact us</span>!</h1>
              <h3 data-wow-duration="500ms" class="wow slideInLeft animated">Ask <span class="color">/Everything</span> to Customer Service.</h3>
              <p data-wow-duration="500ms" class="wow slideInRight animated">Hope you get the best service</p>
              
            </div>
          </div>
          <!-- end single slide -->
          
        </div>
        <!-- End Wrapper for slides -->
        
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
            <img src="<?php echo base_url('img3/boat.png')?>" style="width: 100%; height: 100%;">
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
        Our Works
        ==================================== -->
 <!--    
    <section id="works" class="works clearfix">
      <div class="container">
        <div class="row">
        
          <div class="sec-title text-center">
            <h2>Works</h2>
            <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
          </div>
          
          <div class="sec-sub-title text-center">
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore</p>
          </div>
          
          <div class="work-filter wow fadeInRight animated" data-wow-duration="500ms">
            <ul class="text-center">
              <li><a href="javascript:;" data-filter="all" class="active filter">All</a></li>
              <li><a href="javascript:;" data-filter=".branding" class="filter">Branding</a></li>
              <li><a href="javascript:;" data-filter=".web" class="filter">web</a></li>
              <li><a href="javascript:;" data-filter=".logo-design" class="filter">logo design</a></li>
              <li><a href="javascript:;" data-filter=".photography" class="filter">photography</a></li>
            </ul>
          </div>
          
        </div>
      </div>
      
      <div class="project-wrapper">
      
        <figure class="mix work-item branding">
          <img src="img3/works/item-1.jpg" alt="">
          <figcaption class="overlay">
            <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img3/works/item-1.jpg"><i class="fa fa-eye fa-lg"></i></a>
            <h4>Labore et dolore magnam</h4>
            <p>Photography</p>
          </figcaption>
        </figure>
        
        <figure class="mix work-item web">
          <img src="img3/works/item-2.jpg" alt="">
          <figcaption class="overlay">
            <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img3/works/item-2.jpg"><i class="fa fa-eye fa-lg"></i></a>
            <h4>Labore et dolore magnam</h4>
            <p>Photography</p>
          </figcaption>
        </figure>
        
        <figure class="mix work-item logo-design">
          <img src="img3/works/item-3.jpg" alt="">
          <figcaption class="overlay">
            <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img3/works/item-3.jpg"><i class="fa fa-eye fa-lg"></i></a>
            <h4>Labore et dolore magnam</h4>
            <p>Photography</p>
          </figcaption>
        </figure>
        
        <figure class="mix work-item photography">
          <img src="img3/works/item-4.jpg" alt="">
          <figcaption class="overlay">
            <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img3/works/item-4.jpg"><i class="fa fa-eye fa-lg"></i></a>
            <h4>Labore et dolore magnam</h4>
            <p>Photography</p>
          </figcaption>
        </figure>
      
        <figure class="mix work-item branding">
          <img src="img3/works/item-5.jpg" alt="">
          <figcaption class="overlay">
            <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img3/works/item-5.jpg"><i class="fa fa-eye fa-lg"></i></a>
            <h4>Labore et dolore magnam</h4>
            <p>Photography</p>
          </figcaption>
        </figure>
        
        <figure class="mix work-item web">
          <img src="img3/works/item-6.jpg" alt="">
          <figcaption class="overlay">
            <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img3/works/item-6.jpg"><i class="fa fa-eye fa-lg"></i></a>
            <h4>Labore et dolore magnam</h4>
            <p>Photography</p>
          </figcaption>
        </figure>
        
        <figure class="mix work-item logo-design">
          <img src="img3/works/item-7.jpg" alt="">
          <figcaption class="overlay">
            <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img3/works/item-7.jpg"><i class="fa fa-eye fa-lg"></i></a>
            <h4>Labore et dolore magnam</h4>
            <p>Photography</p>
          </figcaption>
        </figure>
        
        <figure class="mix work-item photography">
          <img src="img3/works/item-8.jpg" alt="">
          <figcaption class="overlay">
            <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img3/works/item-8.jpg"><i class="fa fa-eye fa-lg"></i></a>
            <h4>Labore et dolore magnam</h4>
            <p>Photography</p>
          </figcaption>
        </figure>
        
      </div>
    

    </section>
  -->   
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

          <div class="tmySlides">       
              <img style="width: 20%; min-width: 180px; height: 20%;border-radius: 100%;" src="<?php echo base_url('img3/man1.jpg')?>"><br>
              <p class="tauthor" style="margin-top: 5%"><b>Ernest Hemingway</b></p>
              <p style="margin-top: 2%"><i>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."</i> </p>              
          </div>

          <div class="tmySlides">
            <img style="width: 20%; min-width: 180px; height: 20%;border-radius: 100%;" src="<?php echo base_url('img3/girl1.jpg')?>"><br>
              <p class="tauthor" style="margin-top: 5%"><b>Siti Juleha</b></p>
              <p style="margin-top: 2%"><i>"It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged."</i> </p>    
          </div>

          <div class="tmySlides">
            <img style="width: 20%; min-width: 180px; height: 20%;border-radius: 100%;" src="<?php echo base_url('img3/man2.jpg')?>"><br>
              <p class="tauthor" style="margin-top: 5%"><b>Subagyo Arkabi</b></p>
              <p style="margin-top: 2%"><i>"It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."</i> </p>    
          </div>

          <a class="tprev" onclick="tplusSlides(-1)">❮</a>
          <a class="tnext" onclick="tplusSlides(1)">❯</a>

          </div>

          <div class="tdot-container">
            <span class="tdot" onclick="tcurrentSlide(1)"></span> 
            <span class="tdot" onclick="tcurrentSlide(2)"></span> 
            <span class="tdot" onclick="tcurrentSlide(3)"></span> 
          </div>
            
        </div>
      </div>
    </section>
    
        <!--
        End Testimonials
        ==================================== -->
    
    
<?php $this->load->view("_partials/contact")?>
<?php $this->load->view("_partials/footer")?>