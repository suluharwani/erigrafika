<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct() {
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');
  }
	public function index()
	{
		$data['title'] = "Erigrafika";
		$this->load->view('admin/dashboard', $data);
	}
	public function contact(){
		
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */