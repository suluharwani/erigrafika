<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mdl_popup extends CI_Model {
  function popup_list(){
    $this->db->order_by('status', 'desc');
    $query = $this->db->get('popup');
    return $query;
  }

}
/* End of file ${TM_FILENAME:mdl_popup.php} */
/* Location: ./${TM_FILEPATH/.+((?:application).+)/Mdl_popup/:application/models/mdl_popup.php} */
