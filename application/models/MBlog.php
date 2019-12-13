<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class MBlog extends CI_Model
{
	
	public function dd_status()
	{
		$sql = $this->db->query("SELECT * FROM tb_status");
		return $sql->result();
	}

	public function dd_category()
	{
		$sql = $this->db->query("SELECT * FROM tb_categories");
		return $sql->result();
	}

	public function save($post)
	{
		$title_blog = $this->db->escape($post["title_blog"]);
		$content_blog = $this->db->escape($post["content_blog"]);
		$id_category = $this->db->escape($post["id_category"]);
		$id_status = $this->db->escape($post["id_status"]);

		$sql = $this->db->query("INSERT INTO tb_blogs VALUES (NULL, $title_blog, $content_blog, $id_category, $id_status)");

		if($sql){
			return true;
		}else{
		return false;
		}
	}

	public function getAll()
	{
		$this->db->select('tb_blogs.*, tb_status.*, tb_categories.*');
		$this->db->from('tb_blogs');
		$this->db->join('tb_status', 'tb_blogs.id_status = tb_status.id_status');
		$this->db->join('tb_categories', 'tb_blogs.id_category = tb_categories.id_category');		
		return $this->db->get()->result();
	}

	public function getById($id)
	{
		$sql = $this->db->query("SELECT * FROM tb_blogs WHERE id_blog =".intval($id));
		return $sql->row();
	}

	public function update($post, $id)
	{
		$title_blog = $this->db->escape($post["title_blog"]);
		$content_blog = $this->db->escape($post["content_blog"]);
		$id_category = $this->db->escape($post["id_category"]);
		$id_status = $this->db->escape($post["id_status"]);

		$sql = $this->db->query("UPDATE tb_blogs SET title_blog = $title_blog, content_blog = $content_blog, id_category = $id_category, id_status = $id_status WHERE id_blog= ".intval($id));
		return true;
	}

}

?>