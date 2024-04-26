<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah_model extends CI_Model {

   public function getAllMatakuliah()
   {
       return $this->db->get('matakuliah')->result_array();
   }

   public function getMatakuliahById($id)
   {
       return $this->db->get_where('matakuliah', array('id_matakuliah' => $id))->row_array();
   }

   public function createMatakuliah($data)
   {
       return $this->db->insert('matakuliah', $data);
   }

   public function updateMatakuliah($id, $data)
   {
       $this->db->where('id_matakuliah', $id);
       return $this->db->update('matakuliah', $data);
   }

   public function deleteMatakuliah($id)
   {
       return $this->db->delete('matakuliah', array('id_matakuliah' => $id));
   }
}