<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

    private function is_logged_in()
{
    if (!$this->session->userdata('user_id')) {
        redirect('auth/login');
    }
}
   public function __construct()
   {
       parent::__construct();
       $this->load->model('Jadwal_model');
       $this->load->model('Matakuliah_model');
       $this->load->model('User_model');
       $this->is_logged_in();
   }

   public function index()
   {
       $data['jadwal'] = $this->Jadwal_model->getAllJadwal();
       $this->load->view('templates/header');
       $this->load->view('jadwal/index', $data);
       $this->load->view('templates/footer');
   }

   public function create()
   {
       $data['matakuliah'] = $this->Matakuliah_model->getAllMatakuliah();
       $data['user'] = $this->User_model->getAllUser();
       $this->load->view('templates/header');
       $this->load->view('jadwal/create', $data);
       $this->load->view('templates/footer');
   }

   public function store()
   {
       $data = array(
           'id_matakuliah' => $this->input->post('id_matakuliah'),
           'jam_mulai' => $this->input->post('jam_mulai'),
           'jam_selesai' => $this->input->post('jam_selesai'),
           'nama_ruang' => $this->input->post('nama_ruang'),
           'id_user' => $this->input->post('id_user')
       );

       if ($this->Jadwal_model->createJadwal($data)) {
           redirect('jadwal');
       } else {
           $this->session->set_flashdata('error', 'Gagal menambahkan jadwal');
           redirect('jadwal/create');
       }
   }

   public function read($id)
   {
       $data['jadwal'] = $this->Jadwal_model->getJadwalById($id);
       $this->load->view('templates/header');
       $this->load->view('jadwal/read', $data);
       $this->load->view('templates/footer');
   }

   public function update($id)
   {
       $data['jadwal'] = $this->Jadwal_model->getJadwalById($id);
       $data['matakuliah'] = $this->Matakuliah_model->getAllMatakuliah();
       $data['user'] = $this->User_model->getAllUser();
       $this->load->view('templates/header');
       $this->load->view('jadwal/update', $data);
       $this->load->view('templates/footer');
   }

   public function edit($id)
   {
       $data = array(
           'id_matakuliah' => $this->input->post('id_matakuliah'),
           'jam_mulai' => $this->input->post('jam_mulai'),
           'jam_selesai' => $this->input->post('jam_selesai'),
           'nama_ruang' => $this->input->post('nama_ruang'),
           'id_user' => $this->input->post('id_user')
       );

       if ($this->Jadwal_model->updateJadwal($id, $data)) {
           redirect('jadwal');
       } else {
           $this->session->set_flashdata('error', 'Gagal mengupdate jadwal');
           redirect('jadwal/update/' . $id);
       }
   }

   public function delete($id)
   {
       if ($this->Jadwal_model->deleteJadwal($id)) {
           redirect('jadwal');
       } else {
           $this->session->set_flashdata('error', 'Gagal menghapus jadwal');
           redirect('jadwal');
       }
   }
}