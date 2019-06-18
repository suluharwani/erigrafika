<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_footer extends CI_Model {
  public function list_contact(){
    $this->db->order_by('id', 'desc');
    $query = $this->db->get('contact');
    return $query;
  }
}
