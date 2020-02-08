<?php


class Login_Controller extends CI_Controller
{
    public function Login()
    {
        $this->load->model('Login_Model');
        $result =  $this->Login_Model->user_login();

        if($result == true){


            $user_data = array(
                'user_id'=>$result->user_id,
                'lname'=>$result->user_name,
                'email'=>$result->email,
                'name'=>$result->user_name,
                'loggedin'=>TRUE
            );

            $this->session->set_userdata($user_data);
            $this->load->view('location_cat');
            //$this->lang->load('DE_location_cat.php', 'german');

        }else{
            $this->session->set_flashdata('msg1','Something went wrong');
            $this->session->set_flashdata('msg2','You entered a wrong email or password ,Try again');
            $this->load->view('login');
        }
    }
}
?>