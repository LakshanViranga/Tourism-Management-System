<?php


class Cart_Model extends CI_Model
{
    public function add_cart()
    {

        $data =  array(
            'customer_name' => $this->input->post('customer'),
            'hotel_name' => $this->input->post('hotel'),
            'package_name' => $this->input->post('package'),
            'notes' => $this->input->post('notes')
        );

        $this->db->insert('cart',$data);
    }

    public function view_cart()
    {
        $query = $this->db->get('cart');
        return $query->result();
    }
}