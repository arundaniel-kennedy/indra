<?php

class News_model extends CI_Model{
  public function __construct(){

  }

  public function get_all($cond = '')
  {
    $this->db->from("news");
    $this->db->order_by('created_at', 'DESC');
    $this->db->where("visi = '1'");
    $this->db->limit(5);
    $query = $this->db->get();
    return $query->result_array();
  }

  public function get_al($cond = '')
  {
    $this->db->from("news");
    $this->db->order_by('created_at', 'DESC');
    $this->db->limit(5);
    $query = $this->db->get();
    return $query->result_array();
  }

  public function get_one($slno)
  {
    $this->db->select("*");
    $this->db->from("news");
    $this->db->where("slno='".$slno."'");
    $query = $this->db->get();
    return $query->row_array();
  }

  public function get_image($slno)
  {
    $this->db->select("image");
    $this->db->from("news");
    $this->db->where("slno='".$slno."'");
    $query = $this->db->get();
    return $query->row_array();
  }


  public function create_news($data)
  {
    $result = $this->db->insert("news",$data);
    if($result === true){
      return "succcess";
    }else{
      return $this->db->error();
    }
  }

  public function update_news($data,$slno)
  {
    $result = $this->db->update("news",$data,"slno='".$slno."'");
    if($result === true){
      return "succcess";
    }else{
      return $this->db->error();
    }
  }

  public function delete_news($slno)
  {
    $this->db->where("slno",$slno);
    $result = $this->db->delete("news");

    if($result === true){
      return "succcess";
    }else{
      return $this->db->error();
    }
  }

}
