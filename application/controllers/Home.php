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
		$this->load->model('Mdl_post');
		$this->load->model('Mdl_footer');
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
		$data['review'] = $this->db->get('penilaian');
		$data['blog'] = $this->Mdl_post->post_home();
		$data['video'] = $this->db->get_where('web_video', array('status'=>1));
		$data['portofolio'] = $this->db->get('web_portofolio', 10);
		$data['sosmed'] = $this->Mdl_footer->web_sosmed();
		$about_us_data = $this->Mdl_footer->about_us()->row();
		$data['about_us'] = $about_us_data->isi;
		//contact
		$contact_data = $this->Mdl_footer->contact()->row();
		if ($contact_data) {
			$data['telepon'] = $contact_data->telepon;
			$data['email'] = $contact_data->email;
			$data['alamat'] = $contact_data->alamat;
			$data['buka'] = $contact_data->buka;
			$data['tutup'] = $contact_data->tutup;
		}else{
			$data['telepon'] = "";
			$data['email'] = "";
			$data['alamat'] = "";
			$data['buka'] = "";
			$data['tutup'] = "";
		}

		//contact
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
	function popup(){
		$this->db->where('status', 1);
		$query = $this->db->get('popup');
		if ($query->num_rows()>0) {
			echo json_encode($query->result());
		}else{
			header('HTTP/1.1 500 Internal Server Error');
			header('Content-Type: application/json; charset=UTF-8');
			die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
		}
	}
	public function about(){
		$logo = $this->_logo();
		$data['logo'] = $logo['logo'];
		$data['title_logo'] = $logo['title_logo'];
		$data['title'] = "About";
		$data['content'] = $this->load->view("$this->view_home/about", $data, TRUE);
		$this->load->view('home/template', $data);
	}
	function tambah_penilaian(){
		$this->form_validation->set_rules('nama_penilai', 'Nama', 'required|max_length[100]');
		$this->form_validation->set_rules('perusahaan_penilai', 'Nama', 'required|max_length[100]');
		$this->form_validation->set_rules('penilaian_keterangan', 'Keterangan', 'required|max_length[500]');
		$this->form_validation->set_rules('stars', 'Rating', 'required');
		$ip_penilai = $this->input->ip_address();
		$tanggal = date("Y-m-d");
		$batas_penilai = $this->db->get_where('penilaian', array('tanggal'=>$tanggal, 'ip_address'=>$ip_penilai));
		if (($this->form_validation->run() == TRUE) && ($batas_penilai->num_rows() <= 2))
		{
			$nama_penilai = $this->input->post('nama_penilai');
			$this->load->library('upload');
			$config['upload_path']          = './assets/penilai/asli/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
			$config['max_size']             = 100000;
			$config['max_width']            = 20000;
			$config['max_height']           = 20000;
			$config['file_name']            = $nama_penilai;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if (!$this->upload->do_upload('gambar_penilaian')) {
				$error = array('error' => $this->upload->display_errors());
			} else {
				$file = $this->upload->data();

				$path =  "./assets/penilai/asli/".$file['file_name']."";
				$new_path =  "./assets/penilai/thumb/";
				$new_path_view =  "./assets/penilai/fix/";
				$width = 150;
				$height = 100;
				$width_fix = 700;
              // $height_fix = 1200;
				$this->load->library('image_lib');

				$this->image_lib->initialize(array(
					'image_library' => 'gd2',
					'source_image' => $path,
					'new_image' => $new_path,
					'maintain_ratio' => true,
					'master_dim' => 'width',
					'width' => $width,
					'height' => $height
				));
				$this->image_lib->resize();
				$this->image_lib->initialize(array(
					'image_library' => 'gd2',
					'quality' =>'50%',
					'source_image' => $path,
					'new_image' => $new_path_view,
					'maintain_ratio' => true,
					'master_dim' => 'width',
					'width' => $width_fix,
					'height' => $width_fix*0.6
				));
				$this->image_lib->resize();
			}
			$object_penilaian = array(
				'nama' => $nama_penilai,
				'perusahaan' => $this->input->post('perusahaan_penilai'),
				'gambar' => $file['file_name'],
				'keterangan' => $this->input->post('penilaian_keterangan'),
				'stars' => $this->input->post('stars'),
				'ip_address' => $ip_penilai,
				'tanggal' => $tanggal,

			);
			$query = $this->db->insert("penilaian", $object_penilaian);
			echo json_encode($query);
		}else{
			header('HTTP/1.1 500 Internal Server Booboo');
			header('Content-Type: application/json; charset=UTF-8');
			die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
		}
	}
	function review_list(){
		$query = $this->db->get('penilaian', 10);
		echo json_encode($query->result());
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
