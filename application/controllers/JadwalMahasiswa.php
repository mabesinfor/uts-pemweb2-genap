<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JadwalMahasiswa extends CI_Controller {

    private function is_logged_in()
{
    if (!$this->session->userdata('user_id')) {
        redirect('auth/login');
    }
}
   public function __construct()
   {
       parent::__construct();
       $this->load->model('JadwalMahasiswa_model');
       $this->load->model('Jadwal_model');
       $this->load->model('Mahasiswa_model');
       $this->is_logged_in();
   }

   public function index()
   {
       $data['jadwalmahasiswa'] = $this->JadwalMahasiswa_model->getAllJadwalMahasiswa();
       $this->load->view('templates/header');
       $this->load->view('jadwalmahasiswa/index', $data);
       $this->load->view('templates/footer');
   }

   public function create()
   {
       $data['jadwal'] = $this->Jadwal_model->getAllJadwal();
       $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
       $this->load->view('templates/header');
       $this->load->view('jadwalmahasiswa/create', $data);
       $this->load->view('templates/footer');
   }

   public function store()
   {
       $data = array(
           'id_jadwal' => $this->input->post('id_jadwal'),
           'nim' => $this->input->post('nim')
       );

       if ($this->JadwalMahasiswa_model->createJadwalMahasiswa($data)) {
           redirect('jadwalmahasiswa');
       } else {
           $this->session->set_flashdata('error', 'Gagal menambahkan jadwal mahasiswa');
           redirect('jadwalmahasiswa/create');
       }
   }

   public function read($id)
   {
       $data['jadwalmahasiswa'] = $this->JadwalMahasiswa_model->getJadwalMahasiswaById($id);
       $this->load->view('templates/header');
       $this->load->view('jadwalmahasiswa/read', $data);
       $this->load->view('templates/footer');
   }

   public function update($id)
   {
       $data['jadwalmahasiswa'] = $this->JadwalMahasiswa_model->getJadwalMahasiswaById($id);
       $data['jadwal'] = $this->Jadwal_model->getAllJadwal();
       $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
       $this->load->view('templates/header');
       $this->load->view('jadwalmahasiswa/update', $data);
       $this->load->view('templates/footer');
   }

   public function edit($id)
   {
       $data = array(
           'id_jadwal' => $this->input->post('id_jadwal'),
           'nim' => $this->input->post('nim')
       );

       if ($this->JadwalMahasiswa_model->updateJadwalMahasiswa($id, $data)) {
           redirect('jadwalmahasiswa');
       } else {
           $this->session->set_flashdata('error', 'Gagal mengupdate jadwal mahasiswa');
           redirect('jadwalmahasiswa/update/' . $id);
       }
   }

   public function delete($id)
   {
       if ($this->JadwalMahasiswa_model->deleteJadwalMahasiswa($id)) {
           redirect('jadwalmahasiswa');
       } else {
           $this->session->set_flashdata('error', 'Gagal menghapus jadwal mahasiswa');
           redirect('jadwalmahasiswa');
       }
   }
}