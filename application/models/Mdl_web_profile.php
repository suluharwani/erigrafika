<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_web_profile extends CI_Model {
public function logo_perusahaan(){
	$this->db->select('thumb, title');
	$this->db->order_by('id', 'desc');
	$query = $this->db->get('logo', 1);
	return $query;
}
	

}

/* End of file Mdl_web_profile.php */
/* Location: ./application/models/Mdl_web_profile.php */