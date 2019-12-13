<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Faq extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("MBlogFE");

	}

	public function index()
	{
		$data["allFaq"] = $this->MBlogFE->allFaq();
		$this->load->view("v_ListFaq", $data);

	}

	public function view($id)
	{
		$data["detailsFaq"] = $this->MBlogFE->viewFaq($id);
		$this->load->view("v_detailsFaq", $data);
	}
}

?>