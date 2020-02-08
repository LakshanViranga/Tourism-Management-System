<?php


class business_model extends CI_Model
{
    public function insert_hotel_details($path)
    {
        $data = array(
            'name' => $this->input->post('hotel_name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address'),
            'roomtype1' => $this->input->post('room_type1'),
            'roomtype2' => $this->input->post('room_type2'),
            'roomtype3' => $this->input->post('room_type3'),
            'roomtype4' => $this->input->post('room_type4'),
            'norooms1' => $this->input->post('no_of_rooms1'),
            'norooms2' => $this->input->post('no_of_rooms2'),
            'norooms3' => $this->input->post('no_of_rooms3'),
            'norooms4' => $this->input->post('no_of_rooms4'),

            'suits1' => $this->input->post('suit_type1'),
            'suits2' => $this->input->post('suit_type2'),
            'suits3' => $this->input->post('suit_type3'),
            'nosuits1' => $this->input->post('no_of_suites1'),
            'nosuits2' => $this->input->post('no_of_suites2'),
            'nosuits3' => $this->input->post('no_of_suites3'),
            'amenities' => implode(',', $this->input->post('amenity')),


        );

        $phone = $this->input->post('phone');
            $this->db->where('phone', $phone);
            $respond = $this->db->get('hotel_details');
            if ($respond->num_rows() > 0) {
                $this->session->set_flashdata('msg', 'Your information is already added, would you like to update your information');
                redirect('business_controller/B_Hotel');

        } else {
            $this->db->insert('hotel_details', $data);
            $this->session->set_flashdata('msg', 'Successfully added your information');
            redirect('business_controller/B_Hotel');
        }
    }
    public function update_hotel_details()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'type' => $this->input->post('type'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address'),
        );

        $phone = $this->input->post('phone');
        $this->load->database();
        $this->db->where('phone', $phone);
        $this->db->update('hotel_details',$data);
        $this->session->set_flashdata('msg', 'Your information is successfully added');
        redirect('business_controller/B_Hotel');

    }



    public function insert_rest_details()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'type' => $this->input->post('type'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address'),

        );

        $phone = $this->input->post('phone');
        $this->db->where('phone', $phone);
        $respond = $this->db->get('restuarant_details');
        if ($respond->num_rows() > 0) {
            $this->session->set_flashdata('msg', 'Your information is already added, would you like to update your information');
            redirect('business_controller/B_Restaurant');

        } else {
            $this->db->insert('restuarant_details', $data);
            $this->session->set_flashdata('msg', 'Successfully added your information');
            redirect('business_controller/B_Restaurant');
        }

    }

    public function update_rest_details()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'type' => $this->input->post('type'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address'),
        );

            $phone = $this->input->post('phone');
            $this->load->database();
            $this->db->where('phone', $phone);
            $this->db->update('restuarant_details',$data);
            $this->session->set_flashdata('msg', 'Your information is successfully added');
            redirect('business_controller/B_Hotel');

    }

    public function insert_other_details()
    {
        $data = array(
            'name' => $this->input->post('hotel_name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address'),
        );
        $phone = $this->input->post('phone');
        $this->db->where('phone',$phone);
        $respond = $this->db->get('other_business_details');
        if($respond ->num_rows()>0){
            $this->session->set_flashdata('msg', 'Your information is already added, would you like to update your information');
            redirect('business_controller/B_other');
        }
        else{
            $this->db->insert('other_business_details',$data);
            $this->session->set_flashdata('msg', 'Successfully added your information');
            redirect('business_controller/B_other');
        }
    }

    public function update_other_details()
    {
        $data = array(
            'name' => $this->input->post('hotel_name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address'),
        );

        $phone = $this->input->post('phone');
        $this->load->database();
        $this->db->where('phone', $phone);
        $this->db->update('other_business_details', $data);
        $this->session->set_flashdata('msg', 'Your information is successfully added');
        redirect('business_controller/B_Other');
    }

}