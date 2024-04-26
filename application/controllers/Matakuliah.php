<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {

    private function is_logged_in()
{
    if (!$this->session->userdata('user_id')) {
        redirect('auth/login');
    }
}
   public function __construct()
   {
       parent::__construct();
       $this->load->model('Matakuliah_model');
         $this->is_logged_in();
   }

   public function index()
   {
       $data['matakuliah'] = $this->Matakuliah_model->getAllMatakuliah();
       $this->load->view('templates/header');
       $this->load->view('matakuliah/index', $data);
       $this->load->view('templates/footer');
   }

   public function create()
   {
       $this->load->view('templates/header');
       $this->load->view('matakuliah/create');
       $this->load->view('templates/footer');
   }

   public function store()
   {
       $data = array(
           'nama_matakuliah' => $this->input->post('nama_matakuliah')
       );

       if ($this->Matakuliah_model->createMatakuliah($data)) {
           redirect('matakuliah');
       } else {
           $this->session->set_flashdata('error', 'Gagal menambahkan matakuliah');
           redirect('matakuliah/create');
       }
   }

   public function read($id)
   {
       $data['matakuliah'] = $this->Matakuliah_model->getMatakuliahById($id);
       $this->load->view('templates/header');
       $this->load->view('matakuliah/read', $data);
       $this->load->view('templates/footer');
   }

   public function update($id)
   {
       $data['matakuliah'] = $this->Matakuliah_model->getMatakuliahById($id);
       $this->load->view('templates/header');
       $this->load->view('matakuliah/update', $data);
       $this->load->view('templates/footer');
   }

   public function edit($id)
   {
       $data = array(
           'nama_matakuliah' => $this->input->post('nama_matakuliah')
       );

       if ($this->Matakuliah_model->updateMatakuliah($id, $data)) {
           redirect('matakuliah');
       } else {
           $this->session->set_flashdata('error', 'Gagal mengupdate matakuliah');
           redirect('matakuliah/update/' . $id);
       }
   }

   public function delete($id)
   {
       if ($this->Matakuliah_model->deleteMatakuliah($id)) {
           redirect('matakuliah');
       } else {
           $this->session->set_flashdata('error', 'Gagal menghapus matakuliah');
           redirect('matakuliah');
       }
   }
}