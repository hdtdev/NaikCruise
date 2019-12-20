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
		$data["allProducts"] = $this->MProductsFE->allProducts();
		$this->load->view("v_products", $data);

	}

	// details product
	public function view($id, $slug)
	{
		$data["viewSlug"] = $this->MProductsFE->getBySlug($slug);
		$data["viewItineraries"] = $this->MProductsFE->getItineraries($id);
		$data["viewImageSlider"] = $this->MProductsFE->getImageSlider($id);
 		$this->load->view("v_detailsProduct", $data);
	}
}

?>