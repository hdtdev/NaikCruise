<?php defined('BASEPATH') OR Exit('No direct script access allowed');
/**
 * 
 */
class Howto extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('MBlogFE');
	}

	public function index()
	{
		//$this->load->view("v_get");
	}

	public function getTicket()
	{
		$data["getTicket"] = $this->MBlogFE->howToGetTicket();
		$this->load->view("v_getTicket", $data);
	}

	public function boardingDay()
	{
		$data["boarding"] = $this->MBlogFE->howToBoarding();
		$this->load->view("v_boardingDay", $data);
	}

	public function alreadyBooked()
	{
		$data["alreadyBooked"]= $this->MBlogFE->alreadyBooked();
		$this->load->view("v_alreadyBooked", $data);
	}

	public function packingChecklist()
	{
		$data["packingChecklist"]= $this->MBlogFE->packingChecklist();
		$this->load->view("v_packingChecklist", $data);
	}
}

?>