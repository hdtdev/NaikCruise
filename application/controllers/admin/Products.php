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
		$this->load->model('MProducts');
		//$this->load->model('MProducts');
	}

	public function index()
	{
		if ($this->session->userdata('isloggedin')) {
			$data["allProducts"] = $this->MProducts->getAll();
			$this->load->view("admin/v_ListProducts", $data);
		}else{
			redirect('admin/user/login');
		}

	}

	public function add()
	{
		if(isset($_POST['submit_product'])){
			$id_last = $this->input->post("id_product");
			$this->MProducts->save($_POST);
			redirect("admin/products/lihat/".$id_last);
		}
		$data["cruises"] = $this->MProducts->dd_cruise();
		$data["lastId"] = $this->MProducts->getLastId();
		$this->load->view("admin/v_AddProduct", $data);
	}

	public function published()
	{
		if ($this->session->userdata('isloggedin')) {
			$data["published"] = $this->MProducts->published();
			$this->load->view("admin/v_PublishedProducts", $data);
		}else{
			redirect("admin/user/login");
		}

	}

	public function draft()
	{
		if ($this->session->userdata('isloggedin')) {
			$data["draft"] = $this->MProducts->draft();
			$this->load->view("admin/v_DraftProducts", $data);
		}else{
			redirect("admin/user/login");
		}
	}

	public function lihat($id)
	{
		if ($this->session->userdata('isloggedin')) {
			$data["product"] = $this->MProducts->getById($id);
			$data["lihatItinerary"] = $this->MProducts->lihatItinerary($id);
			$data["lihatImageSlider"] =$this->MProducts->lihatImageSlider($id);
			$this->load->view("admin/v_DetailsProduct", $data);
		}else{
			redirect("admin/user/login");
		}

	}

	public function update($id)
	{
		if (isset($_POST['update_product'])) {
			$this->MProducts->update($_POST, $id);
			redirect("admin/products");
		}
		$data["edit"] = $this->MProducts->getById($id);
		$data["dd_cruise"] = $this->MProducts->dd_cruise();
		$this->load->view("admin/v_EditProduct", $data);
	}

	public function deleteList($id)
	{
		if ($this->MProducts->deleteList($id)) {
			redirect("admin/products");
		}
	}

	public function deletePublished($id)
	{
		if ($this->MProducts->deleteList($id)) {
			redirect("admin/products/published");
		}
	}

	public function deleteDraft($id)
	{
		if ($this->MProducts->deleteList($id)) {
			redirect("admin/products/draft");
		}
	}

	public function addItinerary()
	{

		if (isset($_POST['submit_itinerary'])) {
			$last_id = $this->input->post("id_product");
			$this->MProducts->addItinerary($_POST);
			redirect("admin/products/lihat/".$last_id);
		}
	$this->load->view("admin/v_AddItinerary");
	}

	public function updateItinerary($id_itinerary, $id_product)
	{
		if (isset($_POST['update_itinerary'])) {
			$this->MProducts->updateItinerary($_POST, $id_itinerary);
			redirect("admin/products/lihat/".$id_product); //cari id product, bukan id itinerary
		}
		$data["updateItinerary"] = $this->MProducts->getByIdItinerary($id_itinerary);
		$this->load->view("admin/v_UpdateItinerary", $data);
	}

	public function deleteItinerary ($id_itinerary, $id_product)
	{
		if ($this->MProducts->deleteItinerary($id_itinerary)) {
			redirect("admin/products/lihat/".$id_product);
		}
	}

	public function addImageSlider()
	{
		if (isset($_POST['submit_imageSliderProduct'])) {
			$last_id = $this->input->post("id_product");
			$this->MProducts->addImageSlider($_POST);
			redirect("admin/products/lihat/".$last_id);
		}
		$this->load->view("admin/v_AddImageSlider");
	}

	public function updateImageSlider($id_imageSlider, $id_product)
	{
		if (isset($_POST['update_imageSliderProduct'])) {
			$this->MProducts->updateImageSlider($_POST, $id_imageSlider);
			redirect("admin/products/lihat/".$id_product);
		}
		$data["dataStatus"] = $this->MProducts->getStatusImage();
		$data["updateImageSliderProduct"] = $this->MProducts->getImageById($id_imageSlider);
		$this->load->view("admin/v_UpdateImageSliderProduct", $data);
	}

	public function deleteImageSlider($id_imageSlider, $id_product)
	{
		if ($this->MProducts->deleteImageSlider($id_imageSlider)) {
			redirect("admin/products/lihat/".$id_product);
		}
	}

	public function uploadPriceInfo()
	{
		$config['upload_path'] = './assets/uploads';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 1024;
		$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('upload')) {
			echo json_encode(array('error' => $this->upload->display_errors()));
		}else{
			$upload_data = $this->upload->data();
			echo json_encode(array('file_name' => $upload_data['file_name']));
		}
	}
}

?>
