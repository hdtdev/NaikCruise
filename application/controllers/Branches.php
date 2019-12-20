<?php defined('BASEPATH') OR Exit('No direct script access allowed');

/**
 * 
 */
class Branches extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view("v_branches");
	}
}

?>