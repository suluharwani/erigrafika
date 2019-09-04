<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_portofolio extends CI_Model {
	function kategori_portofolio_list(){
		$query = $this->db->get('portofolio_kategori');
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
	function portofolio_full(){
		$this->db->select('portofolio_kategori.nama as kategori,web_portofolio.nama as nama,web_portofolio.gambar as gambar, web_portofolio.url as url, web_portofolio.keterangan as keterangan, web_portofolio.tanggal as tanggal, admin.nama as nama_admin ');
		$this->db->from('web_portofolio');
		$this->db->join('portofolio_kategori', 'web_portofolio.id_portofolio = portofolio_kategori.id', 'left');
		$this->db->join('admin', 'web_portofolio.id_admin = admin.id', 'left');
		$query = $this->db->get();
		return $query;
	}
	function cat_portofolio_listed(){
		$this->db->select('portofolio_kategori.nama as nama ');
		$this->db->from('portofolio_kategori');
		$this->db->join('web_portofolio', 'portofolio_kategori.id = web_portofolio.id_portofolio', 'inner right');
		$this->db->distinct();
		$query = $this->db->get();
		return $query;
	}
	function portofolio_uri($uri){
		$this->db->select('portofolio_kategori.nama as kategori,web_portofolio.nama as nama,web_portofolio.gambar as gambar, web_portofolio.url as url, web_portofolio.keterangan as keterangan, web_portofolio.tanggal as tanggal, admin.nama as nama_admin ');
		$this->db->from('web_portofolio');
		$this->db->where('url', $uri);
		$this->db->join('portofolio_kategori', 'web_portofolio.id_portofolio = portofolio_kategori.id', 'left');
		$this->db->join('admin', 'web_portofolio.id_admin = admin.id', 'left');
		$query = $this->db->get();
		return $query;
	}

}

/* End of file Mdl_portofolio.php */
/* Location: ./application/models/Mdl_portofolio.php */
