<?php defined('BASEPATH') OR exit ('No direct script access allowed');

/**
 * 
 */
class MCostaCruise extends CI_Model
{
	
	public function getAll(){
		$sql = $this->db->query("SELECT * FROM tb_products WHERE product_collection = 'Costa Cruise' AND product_status = 'publish'");
		return $sql->result();
	}
}
?>