<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

private function is_logged_in()
{
    if (!$this->session->userdata('user_id')) {
        redirect('auth/login');
    }
}
   public function __construct()
   {
       parent::__construct();
       $this->load->model('User_model');
         $this->is_logged_in();
   }

   public function index()
   {
       $data['user'] = $this->User_model->getAllUser();
       $this->load->view('templates/header');
       $this->load->view('user/index', $data);
       $this->load->view('templates/footer');
   }

   public function create()
   {
       $this->load->view('templates/header');
       $this->load->view('user/create');
       $this->load->view('templates/footer');
   }

   public function store()
   {
       $data = array(
           'username' => $this->input->post('username'),
           'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
       );

       if ($this->User_model->createUser($data)) {
           redirect('user');
       } else {
           $this->session->set_flashdata('error', 'Gagal menambahkan user');
           redirect('user/create');
       }
   }

   public function read($id)
   {
       $data['user'] = $this->User_model->getUserById($id);
       $this->load->view('templates/header');
       $this->load->view('user/read', $data);
       $this->load->view('templates/footer');
   }

   public function update($id)
   {
       $data['user'] = $this->User_model->getUserById($id);
       $this->load->view('templates/header');
       $this->load->view('user/update', $data);
       $this->load->view('templates/footer');
   }

   public function edit($id)
   {
       $data = array(
           'username' => $this->input->post('username'),
           'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
       );

       if ($this->User_model->updateUser($id, $data)) {
           redirect('user');
       } else {
           $this->session->set_flashdata('error', 'Gagal mengupdate user');
           redirect('user/update/' . $id);
       }
   }

   public function delete($id)
   {
       if ($this->User_model->deleteUser($id)) {
           redirect('user');
       } else {
           $this->session->set_flashdata('error', 'Gagal menghapus user');
           redirect('user');
       }
   }
}