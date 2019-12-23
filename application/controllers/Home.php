<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("MHomeFE");
	}

	public function index()
	{
		$data["testimonials"] = $this->MHomeFE->testimonials();
		$data["bestSeller"] = $this->MHomeFE->bestSeller();
		$this->load->view('v_home', $data);
	}
}
