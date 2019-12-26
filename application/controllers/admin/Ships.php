<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

/**
 * 
 */
class Ships extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("MShips");

	}

	public function index()
	{
		if ($this->session->userdata('isloggedin')) {
			$data["allShips"] = $this->MShips->getAll();
			$this->load->view("admin/ship/v_ListShips", $data);
		}else{
			redirect('admin/user/login');
		}

		
	}

	public function add()
	{
		if ($this->session->userdata('isloggedin')) {
			$this->load->view("admin/ship/v_AddShip");
		}else{
			redirect('admin/user/login');
		}

		if (isset($_POST['submit_ship'])) {
			$this->MShips->save($_POST);
			redirect("admin/ships");
		}
	}

	public function update($id)
	{
		if ($this->session->userdata('isloggedin')) {
			$data["editShip"] = $this->MShips->getById($id);
			$this->load->view("admin/ship/v_EditShip", $data);
		}else{
			redirect('admin/user/login');
		}

		if (isset($_POST['edit_ship'])) {
			$this->MShips->update($_POST, $id);
			redirect("admin/ships");
		}		
	}

	public function delete($id)
	{
		if ($this->session->userdata('isloggedin')) {
			$this->MShips->delete($id);
			redirect("admin/ships");
		}else{
			redirect('admin/user/login');
		}		
	}
}
?>