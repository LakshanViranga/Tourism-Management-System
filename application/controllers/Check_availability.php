<?php


class Check_availability extends CI_Controller
{
  public function Checking(){
      $this->load->model('check_model');
      $data['query'] = $this->check_model->checking();

      if(count($data['query'])!=0){
         $this->load->view('reservation.php');
      }else{
          ?>
          <script type="text/javascript">
              alert('Sorry Customer Already Booking the all the slots');
          </script>
          <?php
          $this->load->view('home.php');
      }
      $this->load->view('place_cat/hotel',$data);

  }
}