<?php $this->load->view("admin/_partialsAdmin/header")?>
	<div class="card" style="width: 100%">
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
                <th class="text-center">Image</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
            	<?php foreach ($allShips as $row):?>
              <tr>
                <td><?php echo $row->id_ship_list?></td>
                <td><?php echo $row->name_ship_list?></td>
                <td><?php echo $row->image_ship_list?></td>
                <td width="150" class="text-center">
                  <!-- <a href="<?php echo site_url('admin/ships/lihat/'.$row->id_ship_list)?>"
                   class="btn btn-small"><i class="fas fa-eye"></i></a> -->
                  <a href="<?php echo site_url('admin/ships/update/'.$row->id_ship_list)?>"
                   class="btn btn-small"><i class="fas fa-edit"></i></a>
                   <a onclick="deleteConfirm('<?php echo site_url('admin/ships/delete/'.$row->id_ship_list) ?>')"href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
              <?php endforeach;?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
<?php $this->load->view("admin/_partialsAdmin/footer")?>