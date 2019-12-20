<?php defined('BASEPATH') OR Exit ('No direct script access allowed');

/**
 * 
 */
class Banner extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('MBanner');
	}

	public function index()
	{
		$data["allBanner"] = $this->MBanner->getAll();
		$this->load->view("admin/mainBanner/v_ListMainBanner", $data);
	}

	public function add()
	{
		if(isset($_POST['submit_main_banner'])){
			$this->MBanner->save($_POST);
			redirect("admin/banner");
		}
		$this->load->view("admin/mainBanner/v_addMainBanner");
	}

	public function update($id)
	{
		if (isset($_POST['update_banner'])) {
			$this->MBanner->update($_POST, $id);
			redirect("admin/banner");
		}
		$data["updateBanner"] = $this->MBanner->getById($id);
		$this->load->view("admin/mainBanner/v_updateMainBanner", $data);
	}

	public function deleteBanner()
	{
		//
	}
}


?>