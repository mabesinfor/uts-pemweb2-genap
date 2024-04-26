<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

   public function getAllMahasiswa()
   {
    $this->db->select('mahasiswa.nim, mahasiswa.nama, mahasiswa.tanggal_lahir, mahasiswa.alamat, users.username');
    $this->db->from('mahasiswa');
    $this->db->join('users', 'mahasiswa.id_user = users.id_user');
    return $this->db->get()->result_array();
   }

   public function getMahasiswaByNim($nim)
   {
    $this->db->select('mahasiswa.nim, mahasiswa.nama, mahasiswa.tanggal_lahir, mahasiswa.alamat, users.username');
    $this->db->from('mahasiswa');
    $this->db->join('users', 'mahasiswa.id_user = users.id_user');
    $this->db->where('mahasiswa.nim', $nim);
    return $this->db->get()->row_array();
   }

   public function createMahasiswa($data)
   {
       return $this->db->insert('mahasiswa', $data);
   }

   public function updateMahasiswa($nim, $data)
   {
       $this->db->where('nim', $nim);
       return $this->db->update('mahasiswa', $data);
   }

   public function deleteMahasiswa($nim)
   {
       return $this->db->delete('mahasiswa', array('nim' => $nim));
   }
}