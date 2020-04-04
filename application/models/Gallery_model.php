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

  public function get_one($slno)
  {
    $this->db->select("*");
    $this->db->from("gallery");
    $this->db->where("slno='".$slno."'");
    $query = $this->db->get();
    return $query->row_array();
  }

  public function get_num()
  {
    $this->db->select("*");
    $this->db->from("gallery");
    $query = $this->db->get();
    return $query->num_rows();
  }

  public function get_by_num($first_res,$num_of_res)
  {
    $this->db->from("gallery");
    $this->db->order_by('created_at', 'DESC');
    $this->db->limit($num_of_res,$first_res);
    $query = $this->db->get();
    return $query->result_array();
  }

  public  function create_gallery($data){
    $result = $this->db->insert("gallery",$data);
    if($result === true){
      return "success";
    }else{
      return $this->db->error();
    }
  }

  public function get_top_image($slno){
    $this->db->select("topimg");
    $this->db->from("gallery");
    $this->db->where("slno='".$slno."'");
    $query = $this->db->get();
    return $query->row_array();
  }

  public function get_image($slno){
    $this->db->select("img");
    $this->db->from("gallery");
    $this->db->where("slno='".$slno."'");
    $query = $this->db->get();
    return $query->row_array();
  }

  public function update_gallery($data,$slno)
  {
    $result = $this->db->update("gallery",$data,"slno='".$slno."'");
    if($result === true){
      return "success";
    }else{
      return $this->db->error();
    }
  }


  public function delete_gallery($slno)
  {
    $this->db->where("slno",$slno);
    $result = $this->db->delete("gallery");

    if($result === true){
      return "succcess";
    }else{
      return $this->db->error();
    }
  }
}
