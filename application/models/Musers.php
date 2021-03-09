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
}