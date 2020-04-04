<?php

class User_model extends CI_Model{
  public function __construct(){

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

  public function create_user($data){
    $result = $this->db->insert("users",$data);
    if($result === true){
      return "success";
    }else{
      return $this->db->error();
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
