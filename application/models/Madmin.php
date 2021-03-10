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

}