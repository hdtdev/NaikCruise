<?php $this->load->view("admin/_partialsAdmin/header")?>
<?php/* var_dump($product)*/?>

<div class="container" style="margin-top: 35px;">
  <div class="row">
    <div class="col-md-12"><button class="btn btn-dark bg-danger" onclick="mainFunction()" style="width: 100%; background-color: #f0f0f0; padding: 1%; margin-top: 1%;"><strong>MAIN</strong></button>
    </div>
  </div>
  <section id="mainSection" style="margin-top: 1%">
    <div class="row" id="mainSection">
      <div style="margin:5px; margin-left: 25px; width:7%"><a class="btn btn-warning" href="<?php echo site_url('admin/products/update/'.$product->id_product)?>" role="button" style="width: 100%"><i class="fas fa-edit"></i></a></div>
      <div style="margin:5px; width:7%"><a style="width:100%" class="btn btn-danger" href="#!" onclick="deleteConfirm('<?php echo site_url('admin/products/deleteList/'.$product->id_product) ?>')"><i class="fas fa-trash-alt"></i></a></div>
    </div>

    <div class="row" style="margin-top: 5px">
      <div class="col-md-3">
        ID
      </div>
      <div class="col-md-9">
        <?php echo $product->id_product?>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        Product Name
      </div>
      <div class="col-md-9">
        <?php echo $product->product_name?>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        Product Code
      </div>
      <div class="col-md-9">
        <?php echo $product->product_code?>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        Position Order
      </div>
      <div class="col-md-9">
        <?php echo $product->position_order?>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        Slug
      </div>
      <div class="col-md-9">
        <?php echo $product->product_slug?>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        Collection
      </div>
      <div class="col-md-9">
        <?php echo $product->product_collection?>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        Max Child Age
      </div>
      <div class="col-md-9">
        <?php echo $product->product_maximum_child_age?>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        Highlight Date
      </div>
      <div class="col-md-9">
        <?php echo $product->product_highlight_date?>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        Total Days
      </div>
      <div class="col-md-9">
        <?php echo $product->product_total_days?>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        Total Nights
      </div>
      <div class="col-md-9">
        <?php echo $product->product_total_nights?>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        Starting Price
      </div>
      <div class="col-md-9">
        <?php echo $product->product_starting_price?>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        Price Info
      </div>
      <div class="col-md-9">
        <?php echo $product->product_price_info?>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        Cruise
      </div>
      <div class="col-md-9">
        <?php echo $product->name_ship_list?>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        Accomodation
      </div>
      <div class="col-md-9">
        <?php echo $product->product_accomodation?>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        Included
      </div>
      <div class="col-md-9">
        <?php echo $product->product_included?>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        Excluded
      </div>
      <div class="col-md-9">
        <?php echo $product->product_excluded?>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        Terms
      </div>
      <div class="col-md-9">
        <?php echo $product->product_terms?>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        Thumbnail
      </div>
      <div class="col-md-9">
        <img src="<?php echo $this->config->item('path').'/'.$product->product_thumbnail?>" width="100" height="100">
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        Flyer
      </div>
      <div class="col-md-9">
        <?php echo $product->product_flyer?>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        Status
      </div>
      <div class="col-md-9">
        <?php echo $product->name_status?>
      </div>
    </div>
    <hr>
    <br>
  </section>

  <!-- Start Itineraries -->
  <div class="row">
    <div class="col-md-12"><button class="btn btn-dark bg-danger" onclick="itinerariesFunction()" style="width: 100%; background-color: #f0f0f0; padding: 1%; margin-top: 1%;"><strong>ITINERARIES</strong></button>
    </div>
  </div>
  <section id="itinerariesSection" style="display: none">
    <div style="margin: 20px">
      <a class="btn btn-primary" href="<?php echo site_url('admin/products/addItinerary/'.$product->id_product)?>" role="button" style="width:8%"><i class="fas fa-plus-circle"></i></a>
    </div>

      <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Itineraries Product</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th class="text-center">ID</th>
                      <th class="text-center">Day</th>
                      <th class="text-center">Name</th>
                      <th class="text-center">Note</th>
                      <th class="text-center">image</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($lihatItinerary as $row):?>
                    <tr>
                      <td><?php echo $row->id_itinerary?></td>
                      <td><?php echo $row->day_itinerary?></td>
                      <td><?php echo $row->name_itinerary?></td>
                      <td><?php echo $row->note_itinerary?></td>
                      <td><?php echo $row->img_itinerary?></td>
                      <td width="150" class="text-center">
                        <!-- <a href="<?php echo site_url('admin/products/lihat/'.$row->id_itinerary)?>"
                         class="btn btn-small"><i class="fas fa-eye"></i></a> -->
                        <a href="<?php echo site_url('admin/products/updateItinerary/'.$row->id_itinerary.'/'.$this->uri->segment(4))?>"
                         class="btn btn-small"><i class="fas fa-edit"></i></a>
                        <a onclick="deleteConfirm('<?php echo site_url('admin/products/deleteItinerary/'.$row->id_itinerary).'/'.$this->uri->segment(4) ?>')"href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
    <hr>
    <br>
  </section>
  <!-- End Itineraries -->


  <!-- Start Image Slider -->
  <div class="row">
    <div class="col-md-12"><button class="btn btn-dark bg-danger" onclick="imageSlidersFunction()" style="width: 100%; background-color: #f0f0f0; padding: 1%; margin-top: 1%; margin-bottom: 1%"><strong>IMAGE SLIDERS</strong></button>
    </div>
  </div>

  <section id="imageSlidersSection" style="display: none">
    <div style="margin: 20px">
      <a class="btn btn-primary" href="<?php echo site_url('admin/products/addImageSlider/'.$product->id_product)?>" role="button" style="width:8%"><i class="fas fa-plus-circle"></i></a>
    </div>

    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i>
        Itineraries Product</div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Image</th>
                <th class="text-center">Position Order</th>
                <th class="text-center">Is Active</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($lihatImageSlider as $row):?>
              <tr>
                <td><?php echo $row->id_image_slider_product?></td>
                <td><?php echo $row->title_image_slider_product?></td>
                <td><?php echo $row->image_image_slider_product?></td>
                <td><?php echo $row->position_order_image_slider_product?></td>
                <td><?php echo $row->id_status?></td>
                <td width="150" class="text-center">
                  <!-- <a href="<?php echo site_url('admin/products/lihat/'.$row->id_itinerary)?>"
                   class="btn btn-small"><i class="fas fa-eye"></i></a> -->
                  <a href="<?php echo site_url('admin/products/updateImageSlider/'.$row->id_image_slider_product.'/'.$this->uri->segment(4))?>"
                   class="btn btn-small"><i class="fas fa-edit"></i></a>
                  <a onclick="deleteConfirm('<?php echo site_url('admin/products/deleteImageSlider/'.$row->id_image_slider_product).'/'.$this->uri->segment(4) ?>')"href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
              <?php endforeach;?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

<!-- End Image Slider -->




</div>
<?php $this->load->view("admin/_partialsAdmin/footer")?>
