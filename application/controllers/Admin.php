<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
	var $data;
	function __construct() {
		parent::__construct();
		$id_admin = $this->session->userdata('id_admin_login');
		$this->db->where('id', $id_admin);
		$query = $this->db->get('admin');
		$row = $query->row_array();
		$this->data = array(
			'nama_admin' => $row['nama'],
			'nama_web' => 'Erigrafika',
			'robots' => 'noindex,nofollow'
		);
		$this->load->model('mdl_login');
		date_default_timezone_set('Asia/Jakarta');
	}
	public function index(){
		$data = $this->data;
		$this->_make_sure_is_admin();
		$web_info = $this->web_info();
		$this->load->model('Mdl_pengunjung');
		$this->load->model('Mdl_web_profile', 'web_profile');
		$data['title'] = $web_info['nama_web'];
		$data['memory_usage'] = $this->memory_usage();
		$data['unique_pengunjung'] = $this->Mdl_pengunjung->jumlah_pengunjung_unique();
		$data['pengunjung_terbanyak'] = $this->Mdl_pengunjung->pengunjung_terbanyak();
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
	public function alasan_memilih(){
		$data = $this->data;
		$this->_make_sure_is_admin();
		$data['title'] = "Alasan Memilih";
		$this->load->view('admin/alasan', $data);
	}
	function alasan_list(){
		$this->load->model('Mdl_footer');
		$list = $this->Mdl_footer->alasan_list();
		echo json_encode($list->result());
	}
	function tambah_alasan(){
		$alasan = $this->input->post('alasan');
		$this->db->insert('pilih_kami', array('alasan' =>$alasan));
		$affected = $this->db->affected_rows();
		if ($affected>0) {
			header('HTTP/1.1 200 OK');
		}else{
			header('HTTP/1.1 500 Internal Server Error');
			header('Content-Type: application/json; charset=UTF-8');
			die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
		}
	}
	public function popup(){
		$data = $this->data;
		$this->_make_sure_is_admin();
		$data['title'] = "Popup";
		$this->load->view('admin/popup', $data);
	}
	function aktivasi_popup(){
		$this->_make_sure_is_admin();
		$id_popup = $this->input->post("id_popup");
		$this->load->model('Mdl_popup');
		$this->Mdl_popup->disable_popup();
		$query = $this->Mdl_popup->enable_popup($id_popup);
		echo json_encode($query);
	}
	function nonatifkan_popup(){
		$this->_make_sure_is_admin();
		$this->load->model('Mdl_popup');
		$id_popup = $this->input->post("id_popup");
		$query = $this->Mdl_popup->disable_selected_popup($id_popup);
		echo json_encode($query);
	}
	function hapus_popup(){
		$this->_make_sure_is_admin();
		$this->load->model('Mdl_popup');
		$id_popup = $this->input->post("id_popup");
		$query = $this->Mdl_popup->hapus_popup($id_popup);
		echo json_encode($query);
	}
	function popup_list(){
		$this->load->model('Mdl_popup');
		$this->load->model('Mdl_popup');
		$list = $this->Mdl_popup->popup_list()->result();
		echo json_encode($list);
	}
	function tambah_popup(){
		$judul =  $this->input->post('judul_popup');
		$this->load->library('upload');
		$config['upload_path']          = './assets/web_popup/asli/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
		$config['max_size']             = 100000;
		$config['max_width']            = 20000;
		$config['max_height']           = 20000;
		$config['file_name']            = $judul;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('gambar_popup')) {
			$error = array('error' => $this->upload->display_errors());
		} else {
			$file = $this->upload->data();

			$path =  "./assets/web_popup/asli/".$file['file_name']."";
			$new_path =  "./assets/web_popup/thumb/";
			$new_path_view =  "./assets/web_popup/fix/";
			$width = 150;
			$height = 100;
			$width_fix = 1366;
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
		$object_popup = array(
			'judul' =>$judul,
			'status' =>0,
			'keterangan' => $this->input->post('keterangan_popup'),
			'gambar' => $file['file_name']
		);
		$query = $this->db->insert("popup", $object_popup);
		echo json_encode($query);
	}
	public function about_us(){
		$data = $this->data;
		$this->_make_sure_is_admin();
		$data['title'] = "About Us";
		$data['sosmed'] = $this->db->get('sosmed');
		$this->load->view('admin/about_us', $data);
	}
	function tentang_kami_add(){

	}
	function show_perusahaan(){
		$query = $this->db->get('about_us', 1)->result_array();
		echo json_encode($query);
	}
	function show_layanan(){
		$query = $this->db->get('about_us', 1)->result_array();
		echo json_encode($query);
	}
	function show_motto(){
		$query = $this->db->get('about_us', 1)->result_array();
		echo json_encode($query);
	}
	function show_tentang(){
		$query = $this->db->get('about_us', 1)->result_array();
		echo json_encode($query);
	}
	function tambah_layanan_about(){
		$this->form_validation->set_rules('layanan', 'About Us', 'required');
		if ($this->form_validation->run() == TRUE)
		{
			$layanan = $this->input->post('layanan');
			$object = array('layanan' =>$layanan
		);
		$check = $this->db->get('about_us');
		if ($check->num_rows() >=1) {
			$this->db->select_max('id');
			$result= $this->db->get('about_us')->row_array();
			$id = $result['id'];
			$this->db->where('id', $id);
			$query = $this->db->update('about_us', $object);
		}else{
			$query = $this->db->insert('about_us',$object);
		}

		echo json_encode($query);
	}else{
		header('HTTP/1.1 500 Internal Server Error');
		header('Content-Type: application/json; charset=UTF-8');
		die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
	}
}
function tambah_perusahaan(){
	$this->form_validation->set_rules('perusahaan', 'About Us', 'required');
	if ($this->form_validation->run() == TRUE)
	{
		$perusahaan = $this->input->post('perusahaan');
		$object = array('perusahaan' =>$perusahaan
	);
	$check = $this->db->get('about_us');
	if ($check->num_rows() >=1) {
		$this->db->select_max('id');
		$result= $this->db->get('about_us')->row_array();
		$id = $result['id'];
		$this->db->where('id', $id);
		$query = $this->db->update('about_us', $object);
	}else{
		$query = $this->db->insert('about_us',$object);
	}

	echo json_encode($query);
}else{
	header('HTTP/1.1 500 Internal Server Error');
	header('Content-Type: application/json; charset=UTF-8');
	die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
}
}
function tambah_motto(){
	$this->form_validation->set_rules('motto', 'About Us', 'required');
	if ($this->form_validation->run() == TRUE)
	{
		$motto = $this->input->post('motto');
		$object = array('motto' =>$motto
	);
	$check = $this->db->get('about_us');
	if ($check->num_rows() >=1) {
		$this->db->select_max('id');
		$result= $this->db->get('about_us')->row_array();
		$id = $result['id'];
		$this->db->where('id', $id);
		$query = $this->db->update('about_us', $object);
	}else{
		$query = $this->db->insert('about_us',$object);
	}

	echo json_encode($query);
}else{
	header('HTTP/1.1 500 Internal Server Error');
	header('Content-Type: application/json; charset=UTF-8');
	die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
}
}
	function tambah_about_us(){
		$this->form_validation->set_rules('tentang', 'About Us', 'required');
		if ($this->form_validation->run() == TRUE)
		{
			$tentang = $this->input->post('tentang');
			$object = array('isi' =>$tentang
		);
		$check = $this->db->get('about_us');
		if ($check->num_rows() >=1) {
			$this->db->select_max('id');
			$result= $this->db->get('about_us')->row_array();
			$id = $result['id'];
			$this->db->where('id', $id);
			$query = $this->db->update('about_us', $object);
		}else{
			$query = $this->db->insert('about_us',$object);
		}

		echo json_encode($query);
	}else{
		header('HTTP/1.1 500 Internal Server Error');
		header('Content-Type: application/json; charset=UTF-8');
		die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
	}
}
function sosmed_list(){
	$this->load->model('Mdl_footer');
	$query = $this->Mdl_footer->web_sosmed()->result();
	echo  json_encode($query);
}
function tambah_sosmed(){
	$this->form_validation->set_rules('link_sosmed', 'Link', 'required|max_length[200]');
	$this->form_validation->set_rules('sosial_media', 'Social Media', 'required');
	if ($this->form_validation->run() == TRUE)
	{
		$link_sosmed = $this->input->post('link_sosmed');
		$sosial_media = $this->input->post('sosial_media');
		$object = array('id_sosmed' =>$sosial_media ,
		'link'=>$link_sosmed
	);
	$query = $this->db->insert('web_sosmed',$object);
	echo json_encode($query);
}else{
	header('HTTP/1.1 500 Internal Server Error');
	header('Content-Type: application/json; charset=UTF-8');
	die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
}
}
public function contact(){
	$data = $this->data;
	$this->_make_sure_is_admin();
	$data['title'] = "Contact";
	$this->load->view('admin/contact', $data);
}
function contact_list(){
	$data = $this->data;
	$this->_make_sure_is_admin();
	$this->load->model('Mdl_footer');
	$data = $this->Mdl_footer->list_contact()->result();
	echo json_encode($data);
}
function tambah_contact(){
	$data = $this->data;
	$this->_make_sure_is_admin();
	$this->form_validation->set_rules('telepon', 'Telepon', 'required|max_length[20]');
	$this->form_validation->set_rules('email', 'Email', 'required');
	$this->form_validation->set_rules('alamat', 'Alamat', 'required|max_length[200]');
	$this->form_validation->set_rules('buka', 'Buka', 'required|max_length[50]');
	$this->form_validation->set_rules('tutup', 'Tutup', 'required|max_length[50]');
	if ($this->form_validation->run() == TRUE)
	{
		$telepon = $this->input->post('telepon');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$buka = $this->input->post('buka');
		$tutup = $this->input->post('tutup');
		$object = array('telepon' =>$telepon ,
		'email'=>$email,
		'alamat'=>$alamat,
		'buka'=>$buka,
		'tutup'=>$tutup
	);
	$query = $this->db->insert('contact',$object);
	echo json_encode($query);
}else{
	header('HTTP/1.1 500 Internal Server Error');
	header('Content-Type: application/json; charset=UTF-8');
	die(json_encode(array('message' => 'ERROR', 'code' => 1337)));
}
}
public function rating(){
	$data = $this->data;
	$this->_make_sure_is_admin();
	$data['title'] = "Rating";
	$this->load->view('admin/rating', $data);
}
public function blog(){
	$data = $this->data;
	$this->_make_sure_is_admin();
	$data['title'] = "Blog";
	$this->load->view('admin/blog', $data);
}
public function team(){
	$data = $this->data;
	$this->_make_sure_is_admin();
	$data['title'] = "Team";
	$this->load->view('admin/team', $data);
}
function team_list(){
	$query = $this->db->get('team');
	echo $query->result();
}
public function backup_database(){
	$this->load->dbutil();
	$prefs = array(
		'format'      => 'zip',
		'filename'    => 'erigrafika.sql',
	);
	$backup =& $this->dbutil->backup($prefs);
	$db_name = 'backup-on-'. date("Y-m-d-H-i-s") .'.zip';
	$save = 'backup/'.$db_name;
	$this->load->helper('file');
	write_file($save, $backup);
	$this->load->helper('download');
	force_download($db_name, $backup);
	return 0;
}
public function layanan(){
	$data = $this->data;
	$this->_make_sure_is_admin();

	$data['title'] = "Layanan";
	$this->load->view('admin/layanan', $data);
}
public function slider(){
	$data = $this->data;
	$this->_make_sure_is_admin();

	$data['title'] = "Slider";
	$this->load->view('admin/slider', $data);
}
public function keunggulan(){
	$data = $this->data;
	$this->_make_sure_is_admin();
	$data['title'] = "Keunggulan";
	$this->load->view('admin/keunggulan', $data);
}
public function portofolio(){
	$data = $this->data;
	$this->_make_sure_is_admin();
	$data['title'] = "Portofolio";
	$this->load->view('admin/portofolio', $data);
}
function tambah_portofolio(){
	$data = $this->data;
	$this->_make_sure_is_admin();
	$this->form_validation->set_rules('nama_perusahaan_portofolio', 'Nama', 'required');
	$this->form_validation->set_rules('layanan_portofolio', 'Layanan', 'required');
	$this->form_validation->set_rules('select_kategori_portofolio', 'Kategori', 'required');
	$this->form_validation->set_rules('keterangan_portofolio', 'Keterangan', 'required|max_length[500]');
	if ($this->form_validation->run() == TRUE)
	{
		$adm = $this->_admin_data();
		$id_admin = $adm['id_admin'];
		$nama_portofolio = $this->input->post('nama_perusahaan_portofolio')."_".$this->input->post('layanan_portofolio');
		$this->load->library('upload');
		$config['upload_path']          = './assets/portofolio/asli/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
		$config['max_size']             = 100000;
		$config['max_width']            = 20000;
		$config['max_height']           = 20000;
		$config['file_name']            = $nama_portofolio;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('gambar_portofolio')) {
			$error = array('error' => $this->upload->display_errors());
		} else {
			$file = $this->upload->data();

			$path =  "./assets/portofolio/asli/".$file['file_name']."";
			$new_path =  "./assets/portofolio/thumb/";
			$new_path_view =  "./assets/portofolio/fix/";
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
		$object_portofolio = array(
			'nama' => $nama_portofolio,
			'gambar' => $file['file_name'],
			'id_portofolio' => $this->input->post('select_kategori_portofolio'),
			'url' => str_replace(' ', '_', $nama_portofolio),
			'keterangan' => $this->input->post('keterangan_portofolio'),
			'tanggal' => date("Y-m-d"),
			'id_admin' => $id_admin
		);
		$query = $this->db->insert("web_portofolio", $object_portofolio);
		echo json_encode($query);
	}
}
function portofolio_list(){
	$this->load->model('Mdl_portofolio');
	$portofolio = $this->Mdl_portofolio->portofolio_list()->result();
	echo json_encode($portofolio);
}
function kategori_portofolio_list(){
	$this->load->model('Mdl_portofolio');
	$kategori_portofolio = $this->Mdl_portofolio->kategori_portofolio_list()->result();
	echo json_encode($kategori_portofolio);
}
function tambah_kategori_portofolio(){
	$this->form_validation->set_rules('nama_kategori_portofolio', 'Kategori', 'is_unique[portofolio_kategori.nama]');
	if ($this->form_validation->run() == TRUE)
	{
		$kategori = $this->input->post('nama_kategori_portofolio');
		$this->load->model('Mdl_portofolio');
		$insert = $this->Mdl_portofolio->insert_kategori($kategori);
		echo json_encode($insert);
	}
}
function keunggulan_list(){
	$this->load->model('Mdl_keunggulan');
	$query = $this->Mdl_keunggulan->list_keunggulan()->result();
	echo json_encode($query);
}
function tambah_keunggulan(){
	$data = $this->data;
	$this->_make_sure_is_admin();
	$adm = $this->_admin_data();
	$id_admin = $adm['id_admin'];
	$nama_keunggulan = $this->input->post('judul_keunggulan');
	$this->load->library('upload');
	$config['upload_path']          = './assets/keunggulan/asli/';
	$config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
	$config['max_size']             = 100000;
	$config['max_width']            = 20000;
	$config['max_height']           = 20000;
	$config['file_name']            = $this->input->post('judul_keunggulan');
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (!$this->upload->do_upload('gambar_keunggulan')) {
		$error = array('error' => $this->upload->display_errors());
	} else {
		$file = $this->upload->data();
		$path =  "./assets/keunggulan/asli/".$file['file_name']."";
		$new_path =  "./assets/keunggulan/thumb/";
		$new_path_view =  "./assets/keunggulan/fix/";
		$width = 150;
		$height = 100;
		$width_fix = 1366;
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
	$object_foto = array(
		'gambar' => $file['file_name'],
		'nama' => $nama_keunggulan,
		'url' => str_replace(' ', '_', $nama_keunggulan),
		'keterangan' => $this->input->post('keterangan_keunggulan'),
		'tanggal' => date("Y-m-d"),
		'id_admin' => $id_admin
	);
	$query = $this->db->insert("web_keunggulan", $object_foto);
	echo json_encode($query);
}
function layanan_list(){
	$this->load->model('Mdl_layanan');
	$query = $this->Mdl_layanan->list_layanan()->result();
	echo json_encode($query);
}
function tambah_layanan(){
	$data = $this->data;
	$this->_make_sure_is_admin();
	$adm = $this->_admin_data();
	$id_admin = $adm['id_admin'];
	$nama_layanan = $this->input->post('judul_layanan');
	$this->load->library('upload');
	$config['upload_path']          = './assets/layanan/asli/';
	$config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
	$config['max_size']             = 100000;
	$config['max_width']            = 20000;
	$config['max_height']           = 20000;
	$config['file_name']            = $this->input->post('judul_layanan');
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (!$this->upload->do_upload('gambar_layanan')) {
		$error = array('error' => $this->upload->display_errors());
	} else {
		$file = $this->upload->data();
		$path =  "./assets/layanan/asli/".$file['file_name']."";
		$new_path =  "./assets/layanan/thumb/";
		$new_path_view =  "./assets/layanan/fix/";
		$width = 150;
		$height = 100;
		$width_fix = 1366;
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
	$object_foto = array(
		'gambar' => $file['file_name'],
		'nama' => $nama_layanan,
		'url' => str_replace(' ', '_', $nama_layanan),
		'keterangan' => $this->input->post('keterangan_layanan'),
		'tanggal' => date("Y-m-d"),
		'id_admin' => $id_admin
	);
	$query = $this->db->insert("web_layanan", $object_foto);
	echo json_encode($query);
}
function tambah_slider(){
	$data = $this->data;
	$this->_make_sure_is_admin();
	$adm = $this->_admin_data();
	$id_admin = $adm['id_admin'];
	$nama_slider = $this->input->post('nama_slider');
	$this->load->library('upload');
	$config['upload_path']          = './assets/slider/asli/';
	$config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
	$config['max_size']             = 100000;
	$config['max_width']            = 20000;
	$config['max_height']           = 20000;
	$config['file_name']            = $this->input->post('nama_slider');
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (!$this->upload->do_upload('gambar_slider')) {
		$error = array('error' => $this->upload->display_errors());
	} else {
		$file = $this->upload->data();

		$path =  "./assets/slider/asli/".$file['file_name']."";
		$new_path =  "./assets/slider/thumb/";
		$new_path_view =  "./assets/slider/fix/";
		$width = 150;
		$height = 100;
		$width_fix = 1366;
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
	$object_foto = array(
		'gambar' => $file['file_name'],
		'thumb' =>  $file['file_name'],
		'nama' => $nama_slider,
		'url' => str_replace(' ', '_', $nama_slider),
		'keterangan' => $this->input->post('keterangan_slider'),
		'tanggal' => date("Y-m-d"),
		'id_admin' => $id_admin
	);
	$query = $this->db->insert("web_slider", $object_foto);
	echo json_encode($query);
}
function hapus_slider(){
	$id = $this->input->post('id_slider');
	$this->_hapus_gambar_slider($id);
	$this->db->where('id', $id);
	$query = $this->db->delete('web_slider');
	echo json_encode($query);
}
function _hapus_gambar_slider($id){
	$query = $this->db->get_where('web_slider',array('id'=>$id));
	foreach ($query->result() as $row) {
		$gambar = $row->gambar;
		$thumb = $row->thumb;
	}
	$path1 =  "./assets/slider/asli/".$gambar."";
	$path2 =  "./assets/slider/thumb/".$thumb."";
	$path3 =  "./assets/slider/fix/".$gambar."";
	if (file_exists($path1)) {
		unlink($path1);
	}
	if (file_exists($path2)) {
		unlink($path2);
	}
	if (file_exists($path3)) {
		unlink($path3);
	}
}

function slider_list(){
	$this->load->model('Mdl_slider');
	$query = $this->Mdl_slider->slider_list()->result();
	echo json_encode($query);

}
public function video(){
	$data = $this->data;
	$this->_make_sure_is_admin();
	$admin_data = $this->admin_info();
	$data['title'] = "Video";
	$this->load->view('admin/video', $data);
}
function video_list(){
	$this->load->model('Mdl_video');
	$query = $this->Mdl_video->list_video()->result();
	echo json_encode($query);
}
function tambah_video(){
	$judul =  $this->input->post('judul_video');
	$this->load->library('upload');
	$config['upload_path']          = './assets/web_video/gambar/';
	$config['allowed_types']        = 'gif|jpg|png|jpeg|pdf';
	$config['max_size']             = 100000;
	$config['max_width']            = 20000;
	$config['max_height']           = 20000;
	$config['file_name']            = $judul;
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (!$this->upload->do_upload('gambar_video')) {
		$error = array('error' => $this->upload->display_errors());
	} else {
		$file = $this->upload->data();

		$path =  "./assets/web_video/gambar/".$file['file_name']."";
		$new_path =  "./assets/web_video/thumb/";
		$new_path_view =  "./assets/web_video/fix/";
		$width = 150;
		$height = 100;
		$width_fix = 1366;
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
	$object_video = array(
		'judul' =>$judul,
		'status' =>0,
		'keterangan' => $this->input->post('keterangan_video'),
		'gambar' => $file['file_name'],
		'link_video' => $this->input->post('link_video')
	);
	$query = $this->db->insert("web_video", $object_video);
	echo json_encode($query);
}
function hapus_video(){
	$id = $this->input->post('id_video');
	$this->hapus_gambar_video($id);
	$this->db->where('id', $id);
	$query = $this->db->delete('web_video');
	echo json_encode($query);
}
function hapus_gambar_video($id){

	$query = $this->db->get_where('web_video', array('id'=>$id));
	foreach ($query->result() as $value) {
		$gambar = $value->gambar;
	}
	$path1 =  "./assets/web_video/asli/".$gambar."";
	$path2 =  "./assets/web_video/gambar/".$gambar."";
	$path3 =  "./assets/web_video/thumb/".$gambar."";
	if (file_exists($path1)) {
		unlink($path1);
	}
	if (file_exists($path2)) {
		unlink($path2);
	}
	if (file_exists($path3)) {
		unlink($path3);
	}

}
function aktivasi_video(){
	$id = $this->input->post('id_video');
	$video_aktif = $this->db->get_where('web_video', array('status'=>1))->result();
	if ($video_aktif) {
		foreach ($video_aktif as $value) {
			$id_aktif = $value->id;
			$this->db->where('id', $id_aktif);
			$this->db->update('web_video', array('status'=>0));
		}
	}
	$this->db->where('id', $id);
	$query = $this->db->update('web_video', array('status'=>1));
	echo json_encode($query);

}

public function profile(){
	$data = $this->data;
	$this->_make_sure_is_admin();
}
function _admin_data(){
	$data = $this->data;
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
	$data = $this->data;
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
	$data = $this->data;
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
public function _make_sure_is_admin(){
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
