<?php

/**
 * 
 */
class user extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        //load model "Mahasiswa_model"
        $this->load->model("user_model");
        //load library form validation
        $this->load->library("form_validation");

        $this->load->library("session");
    }

    
    function tambahuser()
    {
        $this->form_validation->set_rules('nama', 'name', 'required|max_length[50]');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required|max_length[50]');
        // $this->form_validation->set_rules('repassword', 'confpassword', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "LOGIN";
            $this->load->view('page_header', $data);
            $this->load->view('page_signup');
            $this->load->view('page_footer');
            $this->session->set_flashdata('gagal','login gagal');
        }else {
            $e = $this->user_model->findUser($this->input->post('email', true));
            if($e > 0){
                $this->session->set_flashdata('flash', '1. An account using this email address has already registered. Please enter a valid password or request a new one.');
                redirect('index.php/Cbook/sigPage');
            }else{
                $login = [
                    "email" => $this->input->post('email', true),
                    "password"=> $this->input->post('password', true),
                ];
                $this->session->set_userdata('login', $login);
                $this->user_model->addUser();
                redirect('index.php/Cbook/logPage');
            }
        }
    }

    public function signIn(){
        $user = $this->user_model->findUser();
        if($user != FALSE){
            $this->session->set_userdata('email',$user['email']);
            redirect(base_url(''));
        }else{
            redirect(base_url('index.php/Cbook/logPage'));
        }
    }

    public function logOut(){
        $this->session->sess_destroy();
        redirect(base_url(''));
    }
}