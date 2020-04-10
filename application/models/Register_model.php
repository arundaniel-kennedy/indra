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

  public function check_mail($email){
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where("email ='".$email."'");
    $query = $this->db->get();

    if ($query->num_rows() ==1) {
      return true;
    }else{
      return false;
    }
  }

  public function check_user($data)
  {
    $condition = "email =" . "'" . $data['email'] ."'";
    $this->db->select('password');
    $this->db->from('users');
    $this->db->where($condition);
    $query = $this->db->get();

    if ($query->num_rows() ==1) {
      $result = $query->row_array();
      if ($this->bcrypt->check_password($data['password'], $result['password'])) {
        return true;
      }else{
        return false;
      }
    } else {
      $_SESSION['error'] = "No such user";
      return false;
    }
  }

}
