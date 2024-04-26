<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JadwalMahasiswa_model extends CI_Model {

   public function getAllJadwalMahasiswa()
   {
       $this->db->select('jadwal_mahasiswa.id_jadwal_mahasiswa, jadwal.id_jadwal, jadwal.jam_mulai, jadwal.jam_selesai, jadwal.nama_ruang, matakuliah.nama_matakuliah, mahasiswa.nim, mahasiswa.nama as nama_mahasiswa, users.username');
       $this->db->from('jadwal_mahasiswa');
       $this->db->join('jadwal', 'jadwal_mahasiswa.id_jadwal = jadwal.id_jadwal');
       $this->db->join('matakuliah', 'jadwal.id_matakuliah = matakuliah.id_matakuliah');
       $this->db->join('mahasiswa', 'jadwal_mahasiswa.nim = mahasiswa.nim');
       $this->db->join('users', 'jadwal.id_user = users.id_user');
       return $this->db->get()->result_array();
   }

   public function getJadwalMahasiswaById($id)
   {
       $this->db->select('jadwal_mahasiswa.id_jadwal_mahasiswa, jadwal.id_jadwal, jadwal.jam_mulai, jadwal.jam_selesai, jadwal.nama_ruang, matakuliah.nama_matakuliah, mahasiswa.nim, mahasiswa.nama as nama_mahasiswa, users.username');
       $this->db->from('jadwal_mahasiswa');
       $this->db->join('jadwal', 'jadwal_mahasiswa.id_jadwal = jadwal.id_jadwal');
       $this->db->join('matakuliah', 'jadwal.id_matakuliah = matakuliah.id_matakuliah');
       $this->db->join('mahasiswa', 'jadwal_mahasiswa.nim = mahasiswa.nim');
       $this->db->join('users', 'jadwal.id_user = users.id_user');
       $this->db->where('jadwal_mahasiswa.id_jadwal_mahasiswa', $id);
       return $this->db->get()->row_array();
   }

   public function createJadwalMahasiswa($data)
   {
       return $this->db->insert('jadwal_mahasiswa', $data);
   }

   public function updateJadwalMahasiswa($id, $data)
   {
       $this->db->where('id_jadwal_mahasiswa', $id);
       return $this->db->update('jadwal_mahasiswa', $data);
   }

   public function deleteJadwalMahasiswa($id)
   {
       return $this->db->delete('jadwal_mahasiswa', array('id_jadwal_mahasiswa' => $id));
   }
}