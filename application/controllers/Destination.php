<?php defined('BASEPATH')OR Exit('No direct script access allowed');

/**
 * 
 */
class Destination extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model("MBlogFE");
	}

	public function index()
	{
		$data["destination"] = $this->MBlogFE->destination();
		$this->load->view("v_Destination", $data);
	}
}

?>