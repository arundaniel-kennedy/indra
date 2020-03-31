<?php

class User_model extends CI_Model{
  public function __construct(){

  }

  public function check_user($data)
  {
    $condition = "email =" . "'" . $data['email'] . "' AND " . "password =" . "'" . $data['password'] . "'";
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where($condition);
    $query = $this->db->get();

    if ($query->num_rows() ==1) {
      return true;
    } else {
      $_SESSION['error'] = "No such user";
      return false;
    }
  }

  public function get_user($id)
  {
    $condition = "id =" . "'" . $id ."'" ;
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where($condition);
    $query = $this->db->get();
    return $query->row_array();
  }

  public function user_info($email)
  {
    $condition = "email =" . "'" . $email ."'" ;
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where($condition);
    $query = $this->db->get();
    return $query->result_array();
  }
}
