<?php


class check_model extends CI_Model
{
  public function checking()
  {
//      $sql = written the quey
//      $query = $this->db->query($sql);
//      $result = $query->result_array(); return a true or false
      $this->db->where('availability','yes');
      $query=$this->db->get('place_details');
      return $query->result();
  }
}