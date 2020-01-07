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
		if ($this->session->userdata('isloggedin')) {
			$data["allBanner"] = $this->MBanner->getAll();
			$this->load->view("admin/mainBanner/v_ListMainBanner", $data);	
		}else{
			redirect("admin/user/login");
		}
	}

	public function add()
	{
		if ($this->session->userdata('isloggedin')) {
			$this->load->view("admin/mainBanner/v_addMainBanner");
		}else{
			redirect("admin/user/login");
		}

		if(isset($_POST['submit_main_banner'])){
			$this->MBanner->save($_POST);
			redirect("admin/banner");
		}		
	}

	public function update($id)
	{
		if ($this->session->userdata('isloggedin')) {
			$data["updateBanner"] = $this->MBanner->getById($id);
			$this->load->view("admin/mainBanner/v_updateMainBanner", $data);
		}else{
			redirect("admin/user/login");
		}

		if (isset($_POST['update_banner'])) {
			$this->MBanner->update($_POST, $id);
			redirect("admin/banner");
		}

	}

	public function deleteBanner($id)
	{
		$data = $this->MBanner->getById($id);
		if (!empty($data->image_main_banner)){
			chmod("upload".$data->image_main_banner, 0777);
			unlink("upload/".$data->image_main_banner);
		}
		if ($this->MBanner->deleteList($id)) {
			redirect("admin/banner");
		}
	}
}


?>