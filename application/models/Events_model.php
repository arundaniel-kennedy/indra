<?php

class Events_model extends CI_Model{
  public function __construct(){

  }

  public function get_all()
  {
    $this->db->from("events");
    $this->db->order_by('created_at', 'DESC');
    $this->db->limit(6);
    $query = $this->db->get();
    return $query->result_array();
  }

  public function get_one($slno)
  {
    $this->db->select("*");
    $this->db->from("events");
    $this->db->where("slno='".$slno."'");
    $query = $this->db->get();
    return $query->row_array();
  }

  public function get_num()
  {
    $this->db->select("*");
    $this->db->from("events");
    $query = $this->db->get();
    return $query->num_rows();
  }

  public function get_by_num($first_res,$num_of_res)
  {
    $this->db->from("events");
    $this->db->order_by('created_at', 'DESC');
    $this->db->limit($num_of_res,$first_res);
    $query = $this->db->get();
    return $query->result_array();
  }

  public function get_image($slno)
  {
    $this->db->select("image");
    $this->db->from("events");
    $this->db->where("slno='".$slno."'");
    $query = $this->db->get();
    return $query->row_array();
  }

  public function create_event($data)
  {
    $result = $this->db->insert("events",$data);
    if($result === true){
      return "succcess";
    }else{
      return $this->db->error();
    }
  }

  public function update_event($data,$slno)
  {
    $result = $this->db->update("events",$data,"slno='".$slno."'");
    if($result === true){
      return "succcess";
    }else{
      return $this->db->error();
    }
  }

  public function delete_event($slno)
  {
    $this->db->where("slno",$slno);
    $result = $this->db->delete("events");

    if($result === true){
      return "succcess";
    }else{
      return $this->db->error();
    }
  }
}
