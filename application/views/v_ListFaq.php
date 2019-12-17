<?php $this->load->view("_partials/header")?>

	<section id="bestSeller" class="bestSeller">
      <div class="container">
        <div class="row">
    
          <div class="sec-title-dark text-center wow fadeInUp animated" data-wow-duration="700ms" style="margin-bottom: 5%;">
            <h2>Frequently Asking Question</h2>            
          </div>
          <?php foreach($allFaq as $row):?>
          	<a style="color: #6a737b!important;" href="<?php echo site_url('faq/view/'.$row->id_blog)?>">
          		<div style="margin-top: 1%; background-color: #f3f3f3; padding: 2%;"><h4 style=" margin-left: 3%;"><i><?php echo $row->title_blog?></i></h4></div>
          	</a>
          <?php endforeach;?>
        </div>
      </div>
    </section>
<?php $this->load->view("_partials/footer")?>