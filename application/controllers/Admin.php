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
		$this->load->model('Mdl_web_profile', 'web_profile');

		$query_web_profile = $this->web_profile->logo_perusahaan();
		foreach ($query_web_profile->result() as $logo) {
			$logo_perusahaan = $logo->logo;
			$title_logo = $logo->title;
		}
		if (!is_null($logo_perusahaan)) {
			$data['logo'] = $logo_perusahaan;
		}else {
			$data['logo'] = 'DEFAULT.png';
		}
		if (!is_null($title_logo)) {
			$data['title_logo'] = $title_logo;
		}else {
			$data['title_logo'] = 'DEFAULT.png';
		}


		$this->load->view('admin/dashboard', $data);
	}
	public function profile(){

	}



}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */