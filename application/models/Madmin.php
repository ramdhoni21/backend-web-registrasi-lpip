<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Madmin extends CI_Model
{

    // Get jumlah users by level
    public function get_users_by_level_count($level)
    {
        $this->db->select('id');
        $this->db->where('level', $level);
        $query = $this->db->get('tb_users');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    // Get users by category/level
    public function get_users_by_category($level)
    {
        $this->db->select('*');
        $this->db->where('level', $level);
        $query = $this->db->get('tb_users');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return 0;
        }
    }

    // Validasi / Unvalidasi Users
    public function val_user($id,$val)
    { 
        $this->db->set('validasi', $val);
        $this->db->where('id', $id);
        $this->db->update('tb_users');
        if ($this->db->affected_rows() > 0) {
            // validasi / unvalidasi success
            return true;
        } else {
            // validasi / unvalidasi failed
            return false;
        } 
    }

}