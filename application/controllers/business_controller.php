<?php


class business_controller extends CI_Controller
{
    public function B_Hotel()
    {
        $this->form_validation->set_rules('hotel_name', 'Hotel Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');

        if($this->form_validation->run() == TRUE)
        {

            if($this->input->post('submit')=='Add')
            {
                $this->load->model('business_model');
                $this->business_model->insert_rest_details();
            }

            elseif($this->input->post('submit')=='Update')
            {
                $this->load->model('business_model');
                $this->business_model->update_rest_details();
            }
            elseif($this->input->post('submit')=='Delete')
            {
                $this->load->model('business_model');
                $this->business_model->delete_rest_details();
            }
            else
            {
                $this->load->view('resturant_profile');
            }
        }
        else
        {
            $this->load->view('resturant_profile');
        }


    }



    public function B_Restaurant()
    {
        $this->form_validation->set_rules('name', 'Restaurant Name', 'required');
        $this->form_validation->set_rules('type', 'Restaurant Type', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required|regex_match[/^[0-9]{10}$/]');
        $this->form_validation->set_rules('address', 'Address', 'required');

        if($this->form_validation->run() == TRUE)
        {

            if($this->input->post('submit')=='Add')
            {
                $this->load->model('business_model');
                $this->business_model->insert_rest_details();
            }

            elseif($this->input->post('submit')=='Update')
            {
                $this->load->model('business_model');
                $this->business_model->update_rest_details();
            }
            elseif($this->input->post('submit')=='Delete')
            {
                $this->load->model('business_model');
                $this->business_model->delete_rest_details();
            }
            else
            {
                $this->load->view('resturant_profile');
            }
        }
        else
        {
            $this->load->view('resturant_profile');
        }

    }



    public function B_other()
    {
        $this->form_validation->set_rules('name', 'Name of the business', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        if($this->form_validation->run() == TRUE)
        {

            if($this->input->post('submit')=='Add')
            {
                $this->load->model('business_model');
                $this->business_model->insert_other_details();
            }

            elseif($this->input->post('submit')=='Update')
            {
                $this->load->model('business_model');
                $this->business_model->update_other_details();
            }
            elseif($this->input->post('submit')=='Delete')
            {
                $this->load->model('business_model');
                $this->business_model->delete_other_details();
            }
            else
            {
                $this->load->view('other_forms');
            }
        }
        else
        {
            $this->load->view('resturant_profile');
        }

    }
}