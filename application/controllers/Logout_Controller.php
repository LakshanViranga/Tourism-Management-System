<?php 

class Logout_Controller extends CI_Controller{

    public function logout()
    {

        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('fname');
        $this->session->unset_userdata('lname');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('loggedin');
        

        $this->load->view('login');
    


    }



}



?>