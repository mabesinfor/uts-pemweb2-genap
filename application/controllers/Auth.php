<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function login()
    {
        $this->load->view('auth/login');
    }

    public function authenticate()
{
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run() == TRUE) {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->User_model->getUserByUsername($username);

        if ($user && $password === $user['password']) { // Menggunakan perbandingan string untuk sementara
            $this->session->set_userdata('user_id', $user['id_user']);
            $this->session->set_userdata('username', $user['username']);
            redirect('/');
        } else {
            $this->session->set_flashdata('error', 'Username atau password salah');
            redirect('login');
        }
    } else {
        $this->login();
    }
}

    public function logout()
    {
        $this->session->unset_userdata('user_id');
        redirect('login');
    }

}