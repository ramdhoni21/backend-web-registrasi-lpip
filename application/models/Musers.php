<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Musers extends CI_Model
{

    // check login
    public function check_login($data)
    {
        $this->db->where('email', $data['email']);
        $this->db->where('password', md5($data['password']));
        $query = $this->db->get('tb_users');
        if ($query->num_rows() > 0) {
            // login success
            return $query->result_array()[0];
        } else {
            // login failed
            return false;
        }
    }

    // Register users
    public function register($data)
    {
        $this->db->insert('tb_users', $data);
        if ($this->db->affected_rows() > 0) {
            // register success
            return true;
        } else {
            // register failed
            return false;
        }
        
    }

    // Check email exists
    public function check_email_exists($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('tb_users');
        if ($query->num_rows() > 0) {
            // email exists
            return true;
        } else {
            // email not exists
            return false;
        }
    }

    // Get users by id
    public function get_users_by_id($id)
    {
        $this->db->select('*');
        $this->db->from('tb_users');
        $this->db->join('tb_users_detail', 'tb_users.id = tb_users_detail.id_users');
        $this->db->where('tb_users.id', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return 0;
        }
    }
}
