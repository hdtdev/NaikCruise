<?php $this->load->view("admin/_partialsAdmin/header")?>
<!-- <?php var_dump($allProducts)?> -->

        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            List All Products</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Position Order</th>
                    <th class="text-center">Slug</th>
                    <th class="text-center">Collection</th>
                    <!-- <th>Starting Price</th> -->
                    <th class="text-center">Transportation</th>
                    <!-- <th>Child</th> -->
                    <th class="text-center">Status</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                	<?php foreach ($allProducts as $row):?>
                  <tr>
                    <td><?php echo $row->id_product?></td>
                    <td><?php echo $row->product_name?></td>
                    <td><?php echo $row->position_order?></td>
                    <td><?php echo $row->product_slug?></td>
                    <td><?php echo $row->product_collection?></td>
                    <!-- <td><?php echo $row->product_starting_price?></td> -->
                    <td><?php echo $row->name_ship_list?></td>
                    <!-- <td><?php echo $row->product_maximum_child_age?></td> -->
                    <td><?php echo $row->name_status?></td>
                    <td width="150" class="text-center">
                      <a href="<?php echo site_url('admin/products/lihat/'.$row->id_product)?>"
                       class="btn btn-small"><i class="fas fa-eye"></i></a>
                      <a href="<?php echo site_url('admin/products/update/'.$row->id_product)?>"
                       class="btn btn-small"><i class="fas fa-edit"></i></a>
                       <a onclick="deleteConfirm('<?php echo site_url('admin/products/deleteList/'.$row->id_product) ?>')"href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
        </div>


<?php $this->load->view("admin/_partialsAdmin/footer")?>