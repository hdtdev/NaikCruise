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
		$this->load->model("MHomeFE");

	}

	public function index()
	{
		$data["collection"] = $this->MHomeFE->allCollections();
		$data["allProducts"] = $this->MHomeFE->allProducts();
		$this->load->view("v_products", $data);

	}

	// details product
	public function view($id, $slug)
	{
		$data["viewSlug"] = $this->MHomeFE->getBySlug($slug);
		$data["viewItineraries"] = $this->MHomeFE->getItineraries($id);
		$data["viewImageSlider"] = $this->MHomeFE->getImageSlider($id);
 		$this->load->view("v_detailsProduct", $data);
	}

	public function collection($collection)
	{
		$data["collection"] = $this->MHomeFE->allCollections();
		$data["viewCollection"] = $this->MHomeFE->getByCollection($collection);
		$this->load->view("v_listCollections",$data);
	}
}

?>