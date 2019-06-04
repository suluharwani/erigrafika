<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct() {
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');
    $this->load->helper('download');
  }
  public $view_home = "home/layout";

	public function index()
	{
		//kunjungan web
		$ip = $this->input->ip_address();
		$this->load->model('Mdl_pengunjung');
		$jumlah_pengunjung = $this->Mdl_pengunjung->pengunjung_sama()->num_rows();
		if ($jumlah_pengunjung<1) {
			$object = array(
						'ip_address' => $ip,
						'tanggal'=>date("Y/m/d")
			);
			$this->db->insert('pengunjung', $object);
		}
		//kunjungan web
		$data['title'] = "Eri Grafika";
		$data['nama'] = "Eri Grafika";
		$data['slider'] = $this->db->get('web_slider');
		$data['layanan'] = $this->db->get('web_layanan');
		$data['keunggulan'] = $this->db->get('web_keunggulan');
		$data['video'] = $this->db->get_where('web_video', array('status'=>1));
		$data['portofolio'] = $this->db->get('web_portofolio', 10);
		$this->db->select_min('id');
		$min_id = $this->db->get('web_slider')->result();
		foreach ($min_id as $value) {
			$data['min_id_slider'] = $value->id;
		}
		$logo = $this->_logo();
		$data['logo'] = $logo['logo'];
		$data['title_logo'] = $logo['title_logo'];

		$data['content'] = $this->load->view("$this->view_home/home", $data, TRUE);
		$this->load->view('home/template', $data);	

	}
	public function about(){
		$logo = $this->_logo();
		$data['logo'] = $logo['logo'];
		$data['title_logo'] = $logo['title_logo'];
		$data['title'] = "About";
		$data['content'] = $this->load->view("$this->view_home/about", $data, TRUE);
		$this->load->view('home/template', $data);	
	}
	function _logo(){
		$this->load->model('Mdl_web_profile', 'web_profile');
		$query_web_profile = $this->web_profile->logo_perusahaan();
		foreach ($query_web_profile->result() as $logo) {
			$logo_perusahaan = $logo->logo;
			$title_logo = $logo->title;
		}
		if (!is_null($logo_perusahaan)) {
			$lo['logo'] = $logo_perusahaan;
		}else {
			$lo['logo'] = 'DEFAULT.png';
		}
		if (!is_null($title_logo)) {
			$lo['title_logo'] = $title_logo;
		}else {
			$lo['title_logo'] = 'DEFAULT.png';
		}
		return $lo;
	}
	function download_gambar($gambar){
		$path =  "./assets/slider/asli/".$gambar."";
		force_download($path, NULL);
	}


}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */