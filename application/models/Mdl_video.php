<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_video extends CI_Model {
public function list_video(){
	$query = $this->db->get('web_video');
	return $query;
}
	

}

/* End of file Mdl_video.php */
/* Location: ./application/models/Mdl_video.php */