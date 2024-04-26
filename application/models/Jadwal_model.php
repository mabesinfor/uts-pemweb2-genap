<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_model extends CI_Model {

   public function getAllJadwal()
   {
       $this->db->select('jadwal.id_jadwal, jadwal.jam_mulai, jadwal.jam_selesai, jadwal.nama_ruang, matakuliah.nama_matakuliah, users.username');
         $this->db->from('jadwal');
            $this->db->join('matakuliah', 'jadwal.id_matakuliah = matakuliah.id_matakuliah');
            $this->db->join('users', 'jadwal.id_user = users.id_user');
    return $this->db->get()->result_array();
   }

   public function getJadwalById($id)
   {
    $this->db->select('jadwal.id_jadwal, jadwal.jam_mulai, jadwal.jam_selesai, jadwal.nama_ruang, matakuliah.nama_matakuliah, users.username');
    $this->db->from('jadwal');
    $this->db->join('matakuliah', 'jadwal.id_matakuliah = matakuliah.id_matakuliah');
    $this->db->join('users', 'jadwal.id_user = users.id_user');
    $this->db->where('jadwal.id_jadwal', $id);
    return $this->db->get()->row_array();
   }

   public function createJadwal($data)
   {
       return $this->db->insert('jadwal', $data);
   }

   public function updateJadwal($id, $data)
   {
       $this->db->where('id_jadwal', $id);
       return $this->db->update('jadwal', $data);
   }

   public function deleteJadwal($id)
   {
       return $this->db->delete('jadwal', array('id_jadwal' => $id));
   }
}