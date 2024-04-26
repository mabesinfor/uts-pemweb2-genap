<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

   public function getAllUser()
   {
       return $this->db->get('users')->result_array();
   }

   public function getUserById($id)
   {
       return $this->db->get_where('users', array('id_user' => $id))->row_array();
   }

   public function getUserByUsername($username)
   {
       return $this->db->get_where('users', array('username' => $username))->row_array();
   }

   public function createUser($data)
   {
       return $this->db->insert('users', $data);
   }

   public function updateUser($id, $data)
   {
       $this->db->where('id_user', $id);
       return $this->db->update('users', $data);
   }

   public function deleteUser($id)
   {
       return $this->db->delete('users', array('id_user' => $id));
   }
}