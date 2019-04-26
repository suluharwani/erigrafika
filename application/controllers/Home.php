<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
	$data['title'] = "Eri Grafika";
	$data['nama'] = "Eri Grafika";
	$data['slider'] = $this->db->get('web_slider');
    $this->db->select_min('id');
    $min_id = $this->db->get('web_slider')->result();
    foreach ($min_id as $value) {
         $data['min_id_slider'] = $value->id;
    }
	$this->load->view('home/home', $data);	

	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */