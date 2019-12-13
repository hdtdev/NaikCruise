<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Products extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("MProductsFE");

	}

	public function index()
	{
		$data["allProducts"] = $this->MProductsFE->getAll();
		$this->load->view("v_products", $data);

	}

	public function view($id, $slug)
	{
		$data["viewSlug"] = $this->MProductsFE->getBySlug($slug);
		$data["viewItineraries"] = $this->MProductsFE->getItineraries($id);
		$data["viewImageSlider"] = $this->MProductsFE->getImageSlider($id);
 		$this->load->view("v_detailsProduct", $data);
	
		//view slug -> split jadi beberapa function: 
		// $this->MProductFE->getTourDetails(); ->param = slug
		// $this->MProductFE->getItineraries(); ->param = id_product
		// $this->MProductFE->getImageSlider(); ->param = id_product

		//tambahkan id_product sebagai param. jadi param akhirnya adalah (id_product, $slug);
	}
}

?>