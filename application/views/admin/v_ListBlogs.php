<?php $this->load->view("admin/_partialsAdmin/header")?>

<div class="card" style="width: 100%;">
          <div class="card-header">
            <i class="fas fa-table"></i>
            List All Blogs</div>
          <div class="card-body" style="width: 100%">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Title</th>
                    <th class="text-center">Category</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                	<?php foreach ($allBlogs as $row):?>
                  <tr>
                    <td><?php echo $row->id_blog?></td>
                    <td><?php echo $row->title_blog?></td>
                    <td><?php echo $row->name_category?></td>
                    <td><?php echo $row->name_status?></td>                                        
                    <td width="150" class="text-center">                 
                      <a href="<?php echo site_url('admin/blogs/update/'.$row->id_blog)?>"
                       class="btn btn-small"><i class="fas fa-edit"></i></a>
                       <a onclick="deleteConfirm('<?php echo site_url('admin/blogs/deleteList/'.$row->id_blog) ?>')"href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
<?php $this->load->view("admin/_partialsAdmin/footer")?>