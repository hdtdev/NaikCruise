<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class MBanner extends CI_Model
{

	public function save($post)
	{

		if(!empty($_FILES['image_main_banner']['name'])){
	    	$image_banner =  str_replace(' ','_',date('Ymdhis').$_FILES['image_main_banner']['name']);
	      	$config['upload_path']      = $this->config->item('upload_image');
	      	$config['allowed_types']    = 'gif|jpg|png';
	      	$config['file_name']        = $image_banner;
	      	$this->upload->initialize($config);
	      	$this->upload->do_upload('image_main_banner');
	  	}else{
	      	$image_banner = '';
	  	}


		$name_main_banner = $this->db->escape($post["name_main_banner"]);
		$url_main_banner = $this->db->escape($post["url_main_banner"]);
		$image_main_banner = $image_banner;
		$position_main_banner = $this->db->escape($post["position_main_banner"]);
		$caption_main_banner = $this->db->escape($post["caption_main_banner"]);
		$id_status = $this->db->escape($post["id_status"]);

		$sql = $this->db->query("INSERT INTO tb_main_banner VALUES (NULL, $name_main_banner, $url_main_banner, '$image_main_banner', $position_main_banner, $caption_main_banner, $id_status)");

		if($sql){
			return true;
		}else{
		return false;
		}
	}

	public function getAll()
	{
		$this->db->select('tb_main_banner.*, tb_status.*');
		$this->db->from('tb_main_banner');
		$this->db->join('tb_status', 'tb_main_banner.id_status = tb_status.id_status');		
		return $this->db->get()->result();
	}

	public function getById($id)
	{
		$sql = $this->db->query("SELECT * FROM tb_main_banner WHERE id_main_banner =".intval($id));
		return $sql->row();
	}

	public function update($post, $id)
	{
		if(!empty($_FILES['image_main_banner']['name'])){
	      $image_banner =  str_replace(' ','_',date('Ymdhis').$_FILES['image_main_banner']['name']);
	      $config['upload_path']      = $this->config->item('upload_image');
	      $config['allowed_types']    = 'gif|jpg|png';
	      $config['file_name']        = $image_banner;
	      $this->upload->initialize($config);
	      $this->upload->do_upload('image_main_banner');
	  }else{
	      $image_banner = $this->input->post('old_img_banner');
	  }

		$name_main_banner = $this->db->escape($post["name_main_banner"]);
		$url_main_banner = $this->db->escape($post["url_main_banner"]);
		$image_main_banner = $image_banner;
		$position_main_banner = $this->db->escape($post["position_main_banner"]);
		$caption_main_banner = $this->db->escape($post["caption_main_banner"]);
		$id_status = $this->db->escape($post["id_status"]);

		$sql = $this->db->query("UPDATE tb_main_banner SET name_main_banner=$name_main_banner, url_main_banner=$url_main_banner, image_main_banner='$image_main_banner', position_main_banner=$position_main_banner, caption_main_banner=$caption_main_banner, id_status=$id_status WHERE id_main_banner=".intval($id));

		return true;
	}

}

?>