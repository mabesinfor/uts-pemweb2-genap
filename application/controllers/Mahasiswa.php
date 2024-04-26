<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    private function is_logged_in()
{
    if (!$this->session->userdata('user_id')) {
        redirect('auth/login');
    }
}
   public function __construct()
   {
       parent::__construct();
       $this->load->model('Mahasiswa_model');
       $this->load->model('User_model');
         $this->is_logged_in();
   }

   public function index()
   {
       $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
       $this->load->view('templates/header');
       $this->load->view('mahasiswa/index', $data);
       $this->load->view('templates/footer');
   }

   public function create()
   {
       $data['user'] = $this->User_model->getAllUser();
       $this->load->view('templates/header');
       $this->load->view('mahasiswa/create', $data);
       $this->load->view('templates/footer');
   }

   public function store()
   {
       $data = array(
           'nim' => $this->input->post('nim'),
           'nama' => $this->input->post('nama'),
           'tanggal_lahir' => $this->input->post('tanggal_lahir'),
           'alamat' => $this->input->post('alamat'),
           'id_user' => $this->input->post('id_user')
       );

       if ($this->Mahasiswa_model->createMahasiswa($data)) {
           redirect('mahasiswa');
       } else {
           $this->session->set_flashdata('error', 'Gagal menambahkan mahasiswa');
           redirect('mahasiswa/create');
       }
   }

   public function read($nim)
   {
       $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaByNim($nim);
       $this->load->view('templates/header');
       $this->load->view('mahasiswa/read', $data);
       $this->load->view('templates/footer');
   }

   public function update($nim)
   {
       $data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaByNim($nim);
       $data['user'] = $this->User_model->getAllUser();
       $this->load->view('templates/header');
       $this->load->view('mahasiswa/update', $data);
       $this->load->view('templates/footer');
   }

   public function edit($nim)
   {
       $data = array(
           'nama' => $this->input->post('nama'),
           'tanggal_lahir' => $this->input->post('tanggal_lahir'),
           'alamat' => $this->input->post('alamat'),
           'id_user' => $this->input->post('id_user')
       );

       if ($this->Mahasiswa_model->updateMahasiswa($nim, $data)) {
           redirect('mahasiswa');
       } else {
           $this->session->set_flashdata('error', 'Gagal mengupdate mahasiswa');
           redirect('mahasiswa/update/' . $nim);
       }
   }

   public function delete($nim)
   {
       if ($this->Mahasiswa_model->deleteMahasiswa($nim)) {
           redirect('mahasiswa');
       } else {
           $this->session->set_flashdata('error', 'Gagal menghapus mahasiswa');
           redirect('mahasiswa');
       }
   }
}