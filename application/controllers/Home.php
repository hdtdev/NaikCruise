<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("MProductsFE");
	}

	public function index()
	{
		$data["bestSeller"] = $this->MProductsFE->bestSeller();
		$this->load->view('v_home', $data);
	}
}
