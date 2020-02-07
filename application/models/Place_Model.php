<?php


class Place_Model extends CI_Model
{
   public function get_place($category)
   {
       $this->db->where('category_id',$category);
       $query = $this->db->get('business_place');
       return $query->result();
   }

   public function get_review($id)
   {
       $this->db->where('id',$id);
       $respond = $this->db->get('business_place');
       return $respond->result_array();
   }

   public function get_review_des($id_des)
   {
       $this->db->where('business_place_id',$id_des);
       $respond2 = $this->db->get('feedback_details');
       return $respond2->result();
   }
}