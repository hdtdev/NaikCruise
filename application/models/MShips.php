<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

/**
 * 
 */
class MShips extends CI_Model
{
	
	public function save($post)
	{

		if(!empty($_FILES['image_ship_list']['name'])){
	    	$image_ship =  str_replace(' ','_',date('Ymdhis').$_FILES['image_ship_list']['name']);
	      	$config['upload_path']      = $this->config->item('upload_image');
	      	$config['allowed_types']    = 'gif|jpg|png';
	      	$config['file_name']        = $image_ship;
	      	$this->upload->initialize($config);
	      	$this->upload->do_upload('image_ship_list');
	  	}else{
	      	$image_ship = '';
	  	}

		$name_ship_list = $this->db->escape($post["name_ship_list"]);
		$slug_ship_list = $this->db->escape($post["slug_ship_list"]);		
		$image_ship_list = $image_ship;
		$content_ship_list = $this->db->escape($post["content_ship_list"]);
		$id_brands = $this->db->escape($post["id_brands"]);
		$id_status = $this->db->escape($post["id_status"]);

		$sql = $this->db->query("INSERT INTO tb_ships_list VALUES (NULL, $name_ship_list, $slug_ship_list, $image_ship_list, $content_ship_list, $id_brands, $id_status)");

		if($sql){
			return true;
		}else{
		return false;
		}
	}

	public function getAll()
	{
		return $this->db->get("tb_ships_list")->result();
	}

	public function update($post, $id)
	{
		if(!empty($_FILES['image_ship_list']['name'])){
	      $image_ship =  str_replace(' ','_',date('Ymdhis').$_FILES['image_ship_list']['name']);
	      $config['upload_path']      = $this->config->item('upload_image');
	      $config['allowed_types']    = 'gif|jpg|png';
	      $config['file_name']        = $image_ship;
	      $this->upload->initialize($config);
	      $this->upload->do_upload('image_ship_list');
	  }else{
	      $image_ship = $this->input->post('old_img_ship');
	  }

		$name_ship_list = $this->db->escape($post["name_ship_list"]);
		$slug_ship_list = $this->db->escape($post["slug_ship_list"]);		
		$image_ship_list = $image_ship;
		$content_ship_list = $this->db->escape($post["content_ship_list"]);
		$id_brands = $this->db->escape($post["id_brands"]);
		$id_status = $this->db->escape($post["id_status"]);


		$sql = $this->db->query("UPDATE tb_ships_list SET name_ship_list = $name_ship_list, slug_ship_list=$slug_ship_list, image_ship_list = '$image_ship_list', content_ship_list=$content_ship_list, id_brands=$id_brands, id_status=$id_status WHERE id_ship_list =" .intval($id));

		return true;
	}

	public function getById($id)
	{
		return $this->db->get_where("tb_ships_list", ["id_ship_list" => $id])->row();
	}

	public function delete($id)
	{
		return $this->db->delete("tb_ships_list", array("id_ship_list"=>$id));
	}

	public function ddBrands()
	{
		$sql = $this->db->query("SELECT * FROM tb_brands");
		return $sql->result();
	}	


}
?>