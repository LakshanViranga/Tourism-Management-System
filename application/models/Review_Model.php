<?php


class Review_Model extends CI_Model
{
   public function submit_review($path)
   {
       $data = array(
           'place_name' => $this-> input->post('place_name'),
           'customer_name' => $this-> input->post('customer_name'),
           'over_all'=>$this->input->post('over_all'),
           'description' => $this-> input->post('message'),
           'path_name' => $path

       );
       $this->db->insert('feedback',$data);
   }
}