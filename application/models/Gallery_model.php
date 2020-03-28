<?php

class Gallery_model extends CI_Model{
  public function __construct(){

  }

  public function get_all($cond = '')
  {
    $this->db->from("gallery");
    $this->db->order_by('created_at', 'DESC');
    $this->db->limit(5);
    $query = $this->db->get();
    return $query->result_array();
  }
}
