<?php $this->load->view("admin/_partialsAdmin/header")?>
<!-- <?php echo var_dump($allBanner);?> -->


<div class="card" style="width: 100%;">
    <div class="card-header">
      <i class="fas fa-table"></i>
      List All Main Banner</div>
    <div class="card-body" style="width: 100%">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th class="text-center">ID</th>
              <th class="text-center">Image</th>
              <th class="text-center">Name</th>
              <th class="text-center">URL</th>
              <th class="text-center">Status</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
          	<?php foreach ($allBanner as $row):?>
            <tr>
              <td><?php echo $row->id_main_banner?></td>
              <td><img style="max-height: 100px; max-width: 180px" src="<?php echo $this->config->item('path').$row->image_main_banner?>" ></td>
              <td><?php echo $row->name_main_banner?></td>
              <td><?php echo $row->url_main_banner?></td>
              <td><?php echo $row->name_status?></td>                                        
              <td width="150" class="text-center">                 
                <a href="<?php echo site_url('admin/banner/update/'.$row->id_main_banner)?>"
                 class="btn btn-small"><i class="fas fa-edit"></i></a>
                 <a onclick="deleteConfirm('<?php echo site_url('admin/Banner/deleteBanner/'.$row->id_main_banner) ?>')"href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
<?php $this->load->view("admin/_partialsAdmin/footer")?>