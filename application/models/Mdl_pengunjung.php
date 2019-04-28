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
	public function pengunjung_sepanjang_waktu(){
		$this->db->select('id');
		$query = $this->db->get('pengunjung');
		return $query;
	}
	public function pengunjung_tahunan(){
		$tahun_ini = date("Y");
		$this->db->distinct();
		$this->db->select('monthname(tanggal) as tanggal');
		$this->db->where("year(tanggal)", $tahun_ini);
		$query = $this->db->get('pengunjung');
		return $query;
	}
	public function jumlah_pengunjung_tahunan(){
		$tahun_ini = date("Y");

		$this->db->select('count(ip_address) as jumlah_ip');
		$this->db->group_by('month(tanggal)');
		$this->db->where("year(tanggal)", $tahun_ini);
		$query = $this->db->get('pengunjung');
		return $query;
	}

}

/* End of file Mdl_pengunjung.php */
/* Location: ./application/models/Mdl_pengunjung.php */