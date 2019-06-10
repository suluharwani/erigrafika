<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_post extends CI_Model {
  function post_home(){
    $this->db->select('post.id as post_id, post.meta as meta, post.id_admin as id_admin,post.tanggal as tanggal, post.judul as judul,post.url as url , post.isi as isi, post.gambar as gambar, post.thumb as thumb, post.status as status, admin.nama as admin_nama ');
    $this->db->from('post');
    $this->db->join('admin', 'admin.id = post.id_admin');
    $this->db->order_by('post.id', 'desc');
    $query = $this->db->get();
    return $query;
  }


}
