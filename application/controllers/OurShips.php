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
		$data["listDream"] = $this->MHomeFE->listDream();
		$data["listRoyal"] = $this->MHomeFE->listRoyal();
		$data["listCosta"] = $this->MHomeFE->listCosta();
		$data["listNorwegian"] = $this->MHomeFE->listNorwegian();
		$this->load->view("v_ourShip", $data);
	}

	public function view($id_ship,$slug)
	{
		$data["productShip"] = $this->MHomeFE->getProductByShip($id_ship);
		$data["detailsShip"] = $this->MHomeFE->getDetailsShip($slug);
		$this->load->view("v_detailsOurShip", $data);
	}
}

?>