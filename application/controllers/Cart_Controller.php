<?php


class Cart_Controller  extends CI_Controller
{
   public function add_cart(){
       echo '<script>alert("You Have Successfully Reserved Your Order");</script>';

       $this->load->view('cart');
       $this->load->model('Cart_Model');
       $this->Cart_Model->add_cart();
   }

   public function get_cart(){
       $this->load->model('Cart_Model');
       $data['query'] =  $this->Cart_Model->view_cart('');
       $this->load->view('cart', $data);
   }
}