<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_keunggulan extends CI_Model {
public function list_keunggulan(){
	$query = $this->db->get('web_keunggulan');
	return $query;
}
	

}

/* End of file Mdl_keunggulan.php */
/* Location: ./application/models/Mdl_keunggulan.php */