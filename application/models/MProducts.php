<?php defined('BASEPATH') OR exit ('No direct script access allowed');


/**
 *
 */
class MProducts extends CI_Model
{

	public function save($post)
	{
		if(!empty($_FILES['product_thumbnail']['name'])){
				$image_name =  str_replace(' ','_',date('Ymdhis').$_FILES['product_thumbnail']['name']);
				$config['upload_path']      = $this->config->item('upload_image');
				$config['allowed_types']    = 'gif|jpg|png';
				$config['file_name']        = $image_name;
				$this->upload->initialize($config);
				$this->upload->do_upload('product_thumbnail');
		}else{
				$image_name = '';
		}
		$id_product = $this->db->escape($post["id_product"]);
		$product_name = $this->db->escape($post["product_name"]);
		$product_code = $this->db->escape($post["product_code"]);
		$position_order = $this->db->escape($post["position_order"]);
		$product_slug = $this->db->escape($post["product_slug"]);
		$product_collection = $this->db->escape($post["product_collection"]);
		$product_maximum_child_age = $this->db->escape($post["product_maximum_child_age"]);
		$product_highlight_date = $this->db->escape($post["product_highlight_date"]);
		$product_total_days = $this->db->escape($post["product_total_days"]);
		$product_total_nights = $this->db->escape($post["product_total_nights"]);
		$product_starting_price = $this->db->escape($post["product_starting_price"]);
		$product_price_info = $this->db->escape($post["product_price_info"]);
		$id_ship_list = $this->db->escape($post["id_ship_list"]);
		$product_accomodation = $this->db->escape($post["product_accomodation"]);
		$product_included = $this->db->escape($post["product_included"]);
		$product_excluded = $this->db->escape($post["product_excluded"]);
		$product_terms = $this->db->escape($post["product_terms"]);
		$product_thumbnail = $image_name;
		$product_flyer = $this->db->escape($post["product_flyer"]);
		$id_status = $this->db->escape($post["id_status"]);

		$sql = $this->db->query("INSERT INTO tb_products VALUES ($id_product, $product_name, $product_code, $position_order, $product_slug, $product_collection, $product_maximum_child_age, $product_highlight_date, $product_total_days, $product_total_nights, $product_starting_price, $product_price_info, $id_ship_list, $product_accomodation, $product_included, $product_excluded, $product_terms, '$product_thumbnail', $product_flyer, $id_status)");

		if($sql){
			return true;
		}else{
		return false;
		}
	}

	public function getAll()
	{
		$this->db->select('tb_products.*, tb_ships_list.*, tb_status.*');
		$this->db->from('tb_products');
		$this->db->join('tb_ships_list', 'tb_products.id_ship_list = tb_ships_list.id_ship_list');
		$this->db->join('tb_status', 'tb_products.id_status = tb_status.id_status');
		return $this->db->get()->result();
		// return $this->db->get("tb_products")->result();
	}

	public function dd_cruise()
	{
		$sql = $this->db->query("SELECT * FROM tb_ships_list");
		return $sql->result();
	}

	public function published()
	{
		$sql = $this->db->query("SELECT * FROM tb_products WHERE id_status= 2");
		return $sql->result();
	}


	public function draft()
	{
		$sql = $this->db->query("SELECT * FROM tb_products WHERE id_status= 1");
		return $sql->result();
	}

	public function getById($id)
	{
		$this->db->select('tb_products.*, tb_ships_list.*, tb_status.*');
		$this->db->from('tb_products');
		$this->db->join('tb_ships_list', 'tb_products.id_ship_list = tb_ships_list.id_ship_list');
		$this->db->join('tb_status', 'tb_products.id_status = tb_status.id_status');
		$this->db->where('id_product', $id);
		return $this->db->get()->row();
		//return $this->db->get_where("tb_products", ["id_product" => $id])->row();
	}

	public function getLastId()
	{
		$sql = $this->db->query("SELECT id_product FROM tb_products ORDER BY id_product DESC LIMIT 1");
		return $sql->row();
	}

	public function update($post, $id)
	{
		$product_name = $this->db->escape($post["product_name"]);
		$product_code = $this->db->escape($post["product_code"]);
		$position_order = $this->db->escape($post["position_order"]);
		$product_slug = $this->db->escape($post["product_slug"]);
		$product_collection = $this->db->escape($post["product_collection"]);
		$product_maximum_child_age = $this->db->escape($post["product_maximum_child_age"]);
		$product_highlight_date = $this->db->escape($post["product_highlight_date"]);
		$product_total_days = $this->db->escape($post["product_total_days"]);
		$product_total_nights = $this->db->escape($post["product_total_nights"]);
		$product_starting_price = $this->db->escape($post["product_starting_price"]);
		$product_price_info = $this->db->escape($post["product_price_info"]);
		$id_ship_list = $this->db->escape($post["id_ship_list"]);
		$product_accomodation = $this->db->escape($post["product_accomodation"]);
		$product_included = $this->db->escape($post["product_included"]);
		$product_excluded = $this->db->escape($post["product_excluded"]);
		$product_terms = $this->db->escape($post["product_terms"]);
		$product_thumbnail = $this->_uploadImage();
		$product_flyer = $this->db->escape($post["product_flyer"]);
		$id_status = $this->db->escape($post["id_status"]);

		$sql = $this->db->query("UPDATE tb_products SET product_name = $product_name, product_code = $product_code, position_order = $position_order, product_slug = $product_slug, product_collection = $product_collection, product_maximum_child_age = $product_maximum_child_age, product_highlight_date = $product_highlight_date, product_total_days = $product_total_days, product_total_nights = $product_total_nights, product_starting_price = $product_starting_price, product_price_info = $product_price_info, id_ship_list = $id_ship_list, product_accomodation = $product_accomodation, product_included = $product_included, product_excluded = $product_excluded, product_terms = $product_terms, product_thumbnail = '$product_thumbnail', product_flyer = $product_flyer, id_status = $id_status WHERE id_product= ".intval($id));

		return true;
	}

	public function deleteList($id)
	{
		return $this->db->delete("tb_products", array("id_product"=>$id));
	}

	private function _uploadImage()
	{
	    $config['upload_path']          = './images/';
	    $config['allowed_types']        = 'gif|jpg|png';
	    $config['file_name']            = $this->product_id;
	    $config['overwrite']			= true;
	    $config['max_size']             = 1024; // 1MB
	    // $config['max_width']            = 1024;
	    // $config['max_height']           = 768;

	    $this->load->library('upload', $config);

	    if ($this->upload->do_upload('product_thumbnail')) {
	        return $this->upload->data("file_name");
	    }else{
	    	return "default.jpg";
	    }
	}


	public function lihatItinerary($id)
	{
		$sql = $this->db->query("SELECT * FROM tb_itinerary WHERE id_product= $id ");
		return $sql->result();
	}

	public function getByIdItinerary($id)
	{
		return $this->db->get_where("tb_itinerary", ["id_itinerary" => $id])->row();
	}

	public function addItinerary($post)
	{
		$id_product = $this->db->escape($post["id_product"]);
		$day_itinerary = $this->db->escape($post["day_itinerary"]);
		$name_itinerary = $this->db->escape($post["name_itinerary"]);
		$img_itinerary = $this->db->escape($post["img_itinerary"]);
		$note_itinerary = $this->db->escape($post["note_itinerary"]);

		$sql = $this->db->query("INSERT INTO tb_itinerary VALUES (NULL, $id_product, $day_itinerary, $name_itinerary, $img_itinerary, $note_itinerary)");

		if ($sql) {
			return true;
		}else
		{
			return false;
		}
	}

	public function updateItinerary($post, $id_itinerary)
	{
		$day_itinerary = $this->db->escape($post["day_itinerary"]);
		$name_itinerary = $this->db->escape($post["name_itinerary"]);
		$img_itinerary = $this->db->escape($post["img_itinerary"]);
		$note_itinerary = $this->db->escape($post["note_itinerary"]);

		$sql = $this->db->query("UPDATE tb_itinerary SET day_itinerary=$day_itinerary, name_itinerary=$name_itinerary, img_itinerary=$img_itinerary, note_itinerary=$note_itinerary WHERE id_itinerary=".intval($id_itinerary));

		return true;
	}

	public function deleteItinerary($id_itinerary)
	{
		return $this->db->delete("tb_itinerary", array("id_itinerary" =>$id_itinerary));
	}

	public function addImageSlider($post)
	{
		$id_product = $this->db->escape($post["id_product"]);
		$title_image_slider_product = $this->db->escape($post["title_image_slider_product"]);
		$image_image_slider_product = $this->db->escape($post["image_image_slider_product"]);
		$position_order_image_slider_product = $this->db->escape($post["position_order_image_slider_product"]);
		$id_status = $this->db->escape($post["id_status"]);

		$sql = $this->db->query("INSERT INTO tb_image_slider_product VALUES (NULL, $id_product, $title_image_slider_product, $image_image_slider_product, $position_order_image_slider_product, $id_status) ");

		if ($sql) {
			return true;
		}else
		{
			return false;
		}
	}

	public function updateImageSlider($post, $id_imageSlider )
	{
		// $id_product = $this->db->escape($post["id_product"]);
		$title_image_slider_product = $this->db->escape($post["title_image_slider_product"]);
		$image_image_slider_product = $this->db->escape($post["image_image_slider_product"]);
		$position_order_image_slider_product = $this->db->escape($post["position_order_image_slider_product"]);
		$id_status = $this->db->escape($post["id_status"]);

		$sql = $this->db->query("UPDATE tb_image_slider_product SET title_image_slider_product = $title_image_slider_product, image_image_slider_product = $image_image_slider_product, position_order_image_slider_product = $position_order_image_slider_product, id_status = $id_status WHERE id_image_slider_product = ".intval($id_imageSlider));

		return true;
	}


	public function deleteImageSlider($id_imageSlider)
	{
		return $this->db->delete("tb_image_slider_product", array("id_image_slider_product"=>$id_imageSlider));
	}

	public function lihatImageSlider($id)
	{
		$sql = $this->db->query("SELECT * FROM tb_image_slider_product WHERE id_product= $id ");
		return $sql->result();
		// return $this->db->get("tb_image_slider_product")->result();
	}

	public function getImageById($id_imageSlider)
	{
		return $this->db->get_where("tb_image_slider_product", ["id_image_slider_product" => $id_imageSlider])->row();
	}

	public function getStatusImage()
	{
		return $this->db->get("tb_status")->result();
	}

}
?>
