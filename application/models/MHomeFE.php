<?php defined('BASEPATH') OR exit ('No direct script access allowed');

/**
 * 
 */
class MHomeFE extends CI_Model
{
	
	public function bestSeller()
	{
		// $this->db->select('tb_products.*, tb_ships_list.*');
		// $this->db->from('tb_products');
		// $this->db->join('tb_ships_list', 'tb_products.id_ship_list = tb_ships_list.id_ship_list');
		// $this->db->where('id_status', 2);		
		// return $this->db->get()->result();
		// $sql = $this->db->query("SELECT * FROM tb_products WHERE id_status = 2 LIMIT 9");
		// return $sql->result();

		$sql = $this->db->query("SELECT tb_products.*, tb_ships_list.* FROM tb_products INNER JOIN tb_ships_list ON tb_products.id_ship_list=tb_ships_list.id_ship_list WHERE id_status=2 LIMIT 12;");
		return $sql->result();
	}

	public function allProducts()
	{
		$this->db->select('tb_products.*, tb_ships_list.*');
		$this->db->from('tb_products');
		$this->db->join('tb_ships_list', 'tb_products.id_ship_list = tb_ships_list.id_ship_list');	
		$this->db->where('id_status', 2);	
		return $this->db->get()->result();
	}

	public function getBySlug($slug)
	{

		$sql = $this->db->query("SELECT tb_products.*, tb_ships_list.*, tb_status.* FROM tb_products INNER JOIN tb_ships_list ON tb_products.id_ship_list = tb_ships_list.id_ship_list INNER JOIN tb_status ON tb_products.id_status = tb_status.id_status WHERE product_slug = '$slug'");

		return $sql->row();
	}

	public function getItineraries($id)
	{
		$sql = $this->db->query("SELECT * FROM tb_itinerary WHERE id_product =".intval($id));
		return $sql->result();
	}

	public function getImageSlider($id)
	{
		$sql = $this->db->query("SELECT * FROM tb_image_slider_product WHERE id_product =".intval($id)." AND id_status=2");
		return $sql->result();
	}

	public function getProductByShip($ship)
	{
		$sql = $this->db->query("SELECT tb_products.*, tb_ships_list.*, tb_status.* FROM tb_products INNER JOIN tb_ships_list ON tb_products.id_ship_list = tb_ships_list.id_ship_list INNER JOIN tb_status ON tb_products.id_status = tb_status.id_status WHERE tb_products.id_ship_list =" .intval($ship));
		return $sql->result();
	}

	public function testimonials()
	{
		$sql = $this->db->query("SELECT * FROM tb_blogs WHERE id_category=5 AND id_status=2");
		return $sql->result();
	}

	public function getMainBanner()
	{
		$sql = $this->db->query("SELECT * FROM tb_main_banner WHERE id_status=2 ORDER BY position_main_banner ASC");
		return $sql->result();
	}
	
	public function listDream()
	{
		$sql = $this->db->query("SELECT * FROM tb_ships_list WHERE id_brands = 2 AND id_status=2");
		return $sql->result();
	}

	public function listRoyal()
	{
		$sql = $this->db->query("SELECT * FROM tb_ships_list WHERE id_brands = 3 AND id_status =2");
		return $sql->result();
	}

	public function listCosta()
	{
		$sql = $this->db->query("SELECT * FROM tb_ships_list WHERE id_brands = 1 AND id_status =2");
		return $sql->result();
	}

	public function listNorwegian()
	{
		$sql = $this->db->query("SELECT * FROM tb_ships_list WHERE id_brands = 4 AND id_status =2");
		return $sql->result();
	}
}


?>