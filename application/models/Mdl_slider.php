<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_slider extends CI_Model {
	function slider_list(){
		$this->db->order_by('id', 'desc');
		$query = $this->db->get('web_slider');
		return $query;
	}
	

}

/* End of file Mdl_slider.php */
/* Location: ./application/models/Mdl_slider.php */