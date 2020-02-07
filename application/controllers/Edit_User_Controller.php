<?php
class Edit_User_Controller extends CI_Controller
{
    public function Edit()
    {
        $this->load->view('user_profile');
    }

    public function insertData()
    {

        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[user_profile.email]');

        if ($this->form_validation->run() == false) {
            $this->load->view('user_profile.php');
        } else {
            $this->load->model('Edit_User_Model');
            $response = $this->Edit_User_Model->insert_data();
            if ($response) {
                redirect("Home/Category");
            }
        }
    }
    function index()
    {
        if ( $this->session->userdata('is_login') )
        {

            $session_data = $this->session->userdata('sessiondata');
            $id = $session_data['user_id'];
            $this->load->model('Display_profilepicture');
            $result = $this->Model_name->get_user_data($id);

            if($result==0)
            {
                echo 'No user Found';
            }
            else
            {
                $data['user']=$result;
                $this->load->view('header');
                $this->load->view("user_profile", $data);
            }
        }
    }
}