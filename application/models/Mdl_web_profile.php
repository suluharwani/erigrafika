<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_web_profile extends CI_Model {
public function logo_perusahaan(){
	$this->db->get('', 1);
	$this->db->order_by('id', 'desc');
	
}
	

}

/* End of file Mdl_web_profile.php */
/* Location: ./application/models/Mdl_web_profile.php */