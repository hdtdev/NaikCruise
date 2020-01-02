<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class MBannerFE extends CI_Model
{
	public function getBanner()
	{
		$sql = $this->db->query("SELECT * FROM tb_main_banner ORDER BY position_main_banner ASC AND id_status = 2");
		return $sql->result();
	}
	

}

?>