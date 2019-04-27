<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_pengunjung extends CI_Model {
	public function pengunjung_hari_ini(){
		$hari_ini = date("Y/m/d");
		$this->db->where('tanggal', $hari_ini);
		$query = $this->db->get('pengunjung');
		return $query;
	}
	public function pengunjung_sama(){
		$hari_ini = date("Y/m/d");
		$this->db->where(array('tanggal'=>$hari_ini, 'ip_address'=>$this->input->ip_address()));
		$query = $this->db->get('pengunjung');
		return $query;
	}
}

/* End of file Mdl_pengunjung.php */
/* Location: ./application/models/Mdl_pengunjung.php */