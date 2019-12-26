<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class MBlogFE extends CI_Model
{
	
	public function howToGetTicket()
	{
		$sql = $this->db->query("SELECT * FROM tb_blogs WHERE id_category = 1 AND id_status= 2 ORDER BY id_category DESC LIMIT 1");
		return $sql->row();
	}

	public function howToBoarding()
	{
		$sql = $this->db->query("SELECT * FROM tb_blogs WHERE id_category = 2 AND id_status= 2 ORDER BY id_category DESC LIMIT 1");
		return $sql->row();
	}

	public function allFaq()
	{
		$sql = $this->db->query("SELECT * FROM tb_blogs WHERE id_category = 3 AND id_status= 2");
		return $sql->result();
	}

	public function viewFaq($id)
	{
		$sql = $this->db->query("SELECT * FROM tb_blogs WHERE id_blog =" .intval($id));
		return $sql->row();
	}

	public function destination()
	{
		$sql=$this->db->query("SELECT * FROM tb_blogs WHERE id_category=4 AND id_status=2");
		return $sql->result();
	}

	public function viewDestination($slug)
	{
		$sql = $this->db->query("SELECT * FROM tb_blogs WHERE id_category=4 AND id_status=2 AND slug_blog='$slug'");
		return $sql->row();
	}

}
?>