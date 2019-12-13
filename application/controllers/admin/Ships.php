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
		$data["allShips"] = $this->MShips->getAll();
		$this->load->view("admin/v_ListShips", $data);
	}

	public function add()
	{
		if (isset($_POST['submit_ship'])) {
			$this->MShips->save($_POST);
			redirect("admin/ships");
		}
		$this->load->view("admin/v_AddShip");
	}

	public function update($id)
	{
		if (isset($_POST['edit_ship'])) {
			$this->MShips->update($_POST, $id);
			redirect("admin/ships");
		}
		$data["editShip"] = $this->MShips->getById($id);
		$this->load->view("admin/v_EditShip", $data);
	}

	public function delete($id)
	{
		$this->MShips->delete($id);
		redirect("admin/ships");
	}
}
?>