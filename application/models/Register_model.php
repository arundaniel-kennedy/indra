<?php

class Register_model extends CI_Model{
  public function __construct(){

  }

  public function get_cities($state)
  {
    $this->db->select('city_name');
    $this->db->from('city');
    $this->db->where("state_code ='".$state."'");
    $query = $this->db->get();
    return $query->result_array();
  }

  public function get_states()
  {
    $this->db->select('*');
    $this->db->from('states');
    $query = $this->db->get();
    return $query->result_array();
  }

}
