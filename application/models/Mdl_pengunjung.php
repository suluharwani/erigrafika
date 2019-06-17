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
	public function jumlah_pengunjung_unique(){
		$this->db->distinct();
		$this->db->select('ip_address');
		$query = $this->db->get('pengunjung');
		return $query->num_rows();
	}
	public function pengunjung_terbanyak(){
		$this->db->select('ip_address, count(ip_address) as jumlah_pengunjung, COUNT(id) as total_pengunjung');
		$this->db->from('pengunjung');
		$this->db->group_by('ip_address');
		$this->db->order_by('count(ip_address)', "desc");
		$this->db->limit('4');
		$query = $this->db->get();
		return $query;
	}

}

/* End of file Mdl_pengunjung.php */
/* Location: ./application/models/Mdl_pengunjung.php */
