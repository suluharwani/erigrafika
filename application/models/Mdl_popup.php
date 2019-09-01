<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mdl_popup extends CI_Model {
  function popup_list(){
    $this->db->order_by('status', 'desc');
    $query = $this->db->get('popup');
    return $query;
  }
  function disable_popup(){
    $object = array('status' => 0 );
    $this->db->where('status', 1);
    $query = $this->db->update('popup', $object);
    return $query;
  }
  function enable_popup($id){
    $this->db->where('id', $id);
    $query = $this->db->update('popup', array('status' => 1, ));
    return $query;
  }
  function disable_selected_popup($id){
    $object = array('status' => 0 );
    $this->db->where('id', $id);
    $query = $this->db->update('popup', $object);
    return $query;
  }
  function hapus_popup($id){
    $this->db->where('id', $id);
    $query = $this->db->delete('popup');
    return $query;
  }

}
/* End of file ${TM_FILENAME:mdl_popup.php} */
/* Location: ./${TM_FILEPATH/.+((?:application).+)/Mdl_popup/:application/models/mdl_popup.php} */
