<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OurShips extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('MHomeFE');

	}

	public function index()
	{
		$this->load->view("v_ourShip");
	}

	public function costaneoromantica($ship)
	{
		$data["ship"] = $this->MHomeFE->getProductByShip($ship);
		$this->load->view("costaCruise/costaneoromantica", $data);
	}
}

?>