<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_layanan extends CI_Model {
public function list_layanan(){
	$query = $this->db->get('web_layanan');
	return $query;
}
	

}

/* End of file Mdl_layanan.php */
/* Location: ./application/models/Mdl_layanan.php */