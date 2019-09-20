<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_footer extends CI_Model {
  public function list_contact(){
    $this->db->order_by('id', 'desc');
    $query = $this->db->get('contact');
    return $query;
  }
  public function web_sosmed(){
    $this->db->select('web_sosmed.id as id, web_sosmed.link as link, sosmed.nama as sosmed, sosmed.class as class');
		$this->db->from('web_sosmed');
		$this->db->join('sosmed', 'web_sosmed.id_sosmed = sosmed.id', 'left');
		$this->db->order_by('web_sosmed.id', 'desc');
		$query = $this->db->get();
    return $query;
  }
  public function about_us(){
    $query = $this->db->get('about_us', 1);
    return $query;
  }
  public function contact(){
    $this->db->where('status', 1);
    $query = $this->db->get('contact', 1);
    return $query;
  }
  public function alasan_list(){
    return $this->db->get('pilih_kami');
  }
}
