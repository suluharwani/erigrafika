<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('mdl_login');
		date_default_timezone_set('Asia/Jakarta');
	}
	public function index()
	{
		$this->_make_sure_is_admin();

		$web_info = $this->web_info();

		$data['title'] = $web_info['nama_web'];
		$this->load->model('Mdl_web_profile', 'web_profile');
		$data['memory_usage'] = $this->memory_usage();
		$this->load->model('Mdl_pengunjung');
		$data['pengunjung_hari_ini'] = $this->Mdl_pengunjung->pengunjung_hari_ini()->num_rows();
		$data['pengunjung_sepanjang_waktu'] = $this->Mdl_pengunjung->pengunjung_sepanjang_waktu()->num_rows();
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
		$stat_pengunjung = $this->Mdl_pengunjung->pengunjung_tahunan();
		$stat_jumlah_pengunjung = $this->Mdl_pengunjung->jumlah_pengunjung_tahunan();
		foreach ($stat_pengunjung->result_array() as $statistik_p) {
			$bulan[] = $statistik_p['tanggal'];
		}
		foreach ($stat_jumlah_pengunjung->result_array() as $statistik_jumlah) {
			$jumlah_pengunjung[] = $statistik_jumlah['jumlah_ip'];
		}
		$data['array_statistik_bulan'] = json_encode($bulan);
		$data['array_statistik_jumlah_ip'] = json_encode($jumlah_pengunjung);

		$this->load->view('admin/dashboard', $data);
	}
	public function slider(){
		$data['title'] = "Slider";
		$this->load->view('admin/slider', $data);
	}
	public function profile(){
		$this->_make_sure_is_admin();
	}
	function _admin_data(){
		$this->_make_sure_is_admin();
		$admin_data = $this->admin_info();
		foreach ($admin_data->result() as $value) {
			$adm['id_admin'] = $value->id_admin;
			$adm['nama_admin'] = $value->nama;
			$adm['level_admin'] = $value->level;
			$adm['foto_admin'] = $value->foto;
			$adm['alamat_admin'] = $value->alamat;
			$adm['nomor_telepon_admin'] = $value->nomor_telepon;
			$adm['email_admin'] = $value->email;
		}
		if ($adm['level_admin'] == 1) {
			$adm['jabatan_admin'] = "Super Admin";
		}else{
			$adm['jabatan_admin'] = "Admin";
		}
		return $adm;
	}
	function web_info(){
		$this->_make_sure_is_admin();
		$this->load->model('Mdl_web_profile');
		$info_web = $this->Mdl_web_profile->info_profile();
		foreach ($info_web->result() as $inf) {
			if (isset($inf->nama_web)) {
				$info['nama_web'] = $inf->nama_web;
			}else {
				$info['nama_web'] = "";
			}
			if (isset($inf->alamat)) {
				$info['alamat'] = $inf->alamat;
			}else {
				$info['alamat']="";
			}
		}
		return $info;
	}
	function admin_info(){
		$this->_make_sure_is_admin();
		$id_admin = $this->session->userdata('id_admin_login');
		if ($id_admin == null) {
			redirect('login','refresh');
		}else{
			$this->db->select('* ,admin.id as id_admin');
			$this->db->from('admin');
			$this->db->join('contact_admin', 'admin.id = contact_admin.id_admin', 'left');
			$this->db->join('data_admin', 'admin.id = data_admin.id_admin', 'left');
			$this->db->where('admin.id', $id_admin);
			$admin = $this->db->get();
		}
		return $admin;
	}
	function _make_sure_is_super_admin(){
		$id_admin = $this->session->userdata('id_admin_login');
		$admin = $this->db->get_where('admin', array('id'=>$id_admin));
		foreach ($admin->result() as $value) {
			$level = $value->level;
		}
		if (isset($level)) {
			if ($level != "1") {
				$this->session->sess_destroy();
				redirect('login','refresh');
			}
		}else{
			$this->session->sess_destroy();
			redirect('login','refresh');
		}
	}
	function _make_sure_is_admin(){
		$is_user = $this->session->userdata('status_login_admin');
		if ($is_user != "admin_login") {
			$this->session->sess_destroy();
			redirect('login','refresh');
		}
	}
	function convert($size){
		$unit=array('b','kb','mb','gb','tb','pb');
		return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
	}
// 	function memory_usage(){
// 	return $this->convert(memory_get_usage(true)); // 123 kb
// }
function memory_usage() {
	
	$mem = memory_get_usage(true);
	
	if ($mem < 1024) {
		
		$$memory = $mem .' B'; 
		
	} elseif ($mem < 1048576) {
		
		$memory = round($mem / 1024, 2) .' KB';
		
	} else {
		
		$memory = round($mem / 1048576, 2) .' MB';
		
	}
	
	return $memory;
	
}


}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */