<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_portofolio extends CI_Model {
	function kategori_portofolio_list(){
		$query = $this->db->get_where('portofolio_kategori');
		return $query;
	}
	function portofolio_list(){
		$query = $this->db->get_where('web_portofolio');
		return $query;
	}
	function insert_kategori($nama){
		$query = $this->db->insert('portofolio_kategori', array('nama'=>$nama));
		return $query;
	}

	

}

/* End of file Mdl_portofolio.php */
/* Location: ./application/models/Mdl_portofolio.php */