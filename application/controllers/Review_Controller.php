<?php


class Review_Controller extends CI_Controller
{
   public function review_submit()
   {


       $config = array(
           'upload_path' => "./uploads/",
           'allowed_types' => "gif|jpg|png|jpeg|pdf",
           'overwrite' => TRUE,
//           'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
//           'max_height' => "768",
//           'max_width' => "1024"
       );

       $this->load->library('upload', $config);
       $this->upload->do_upload();

       $this->load->model('Review_Model');
       $this->Review_Model->submit_review();
   }
}