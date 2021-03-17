<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('Musers','musers');
    }

	// Check is login
    public function is_login()
    {
        if ($this->session->userdata('is_login')) {
            $this->check_auth();
        }
    }

    // Check auth
    public function check_auth()
    {
        // Auth login level
        if ($this->session->userdata('level') == '1') {       // Admin
            redirect('Admin/');
        } elseif($this->session->userdata('level') == '2') {  // Presenter
            redirect('presenter/');
        } elseif ($this->session->userdata('level') == '3') { // Partisipant
            redirect('partisipant/');
        }
    }

	// Login page
    public function login()
    {
        $this->is_login();

        if (isset($_POST)) {
            $this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required|callback_check_email_exists_login', array('required' => 'Enter email!'));
            $this->form_validation->set_rules('pass', 'Password', 'trim|required', array('required' => 'Enter password!'));
            if ($this->form_validation->run() == FALSE) {
            } else {
                $data = [
                    'email' => $this->input->post('email'),
                    'password' => $this->input->post('pass')
                ];
                $users = $this->musers->check_login($data);
                if ($users) {
                    if ($users['validasi'] == 1) {
                        $session = [
                            'is_login' => true,
                            'id_user' =>  $users['id'],
                            'name' => $users['name'],
                            'level' => $users['level']
                        ];
                        $this->session->set_userdata($session);
                        redirect('users/login');
                    } else {
                        $this->session->set_flashdata('login_failed', 'Your account has not been validated!');
                    }
                    
                } else {
                    $this->session->set_flashdata('pass', 'Password incorrect!');
                }
            }
        }
        $data['title'] = "Login";
		$this->load->view('users/partials/head', $data);
		$this->load->view('users/login');
		$this->load->view('users/partials/footer');
    }

	// Check email user exists login
    public function check_email_exists_login($email)
    {
        $query = $this->musers->check_email_exists($email);
        if ($query) {
            return true;
        } else {
            $this->form_validation->set_message('check_email_exists_login', 'Email not registered!');
            return false;
        }
    }

    // Check email user exists register
    public function check_email_exists_register($email)
    {
        $query = $this->musers->check_email_exists($email);
        if ($query) {
            $this->form_validation->set_message('check_email_exists_register', 'Email has been registered!');
            return false;
        } else {
            return true;
        }
    }

	// Register
    public function register()
	{
        if (isset($_POST)) {
            $this->form_validation->set_rules('name', 'Full Name', 'trim|required', array('required' => 'Enter Your Name!'));
            $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|callback_check_email_exists_register', array('required' => 'Enter Your Email!'));
            $this->form_validation->set_rules('pass1', 'Password', 'trim|required|min_length[8]', array('required' => 'Enter Your Password!', 'min_length' => 'Password must be at least 8 characters!'));
            $this->form_validation->set_rules('pass2', 'Confirm Password', 'trim|required|matches[pass1]', array('required' => 'Enter Your Confirm Password!', 'matches' => 'Password not match!'));
            $this->form_validation->set_rules('category', 'Category', 'trim|required', array('required' => 'Select Category!'));
            if ($this->form_validation->run() == FALSE) {
                // echo validation_errors();
            } else {
                $data = [
                    'name' => $this->input->post('name', true),
                    'email' => $this->input->post('email', true),
                    'password' => md5($this->input->post('pass1', true)),
                    'level' => $this->input->post('category'),
                    'date' => date("Y/m/d")
                ];
                $query = $this->musers->register($data);
                if ($query) {
                    $this->session->set_flashdata('success', 'Account registration is successful. You can log in when your account has been verified.');
                } else {
                    $this->session->set_flashdata('failed', 'Account registration failed!');
                }
            }
        }

        $this->is_login();

		$data['title'] = "Register";
		$this->load->view('users/partials/head', $data);
		$this->load->view('users/register');
		$this->load->view('users/partials/footer');
	}

	// Logout
    public function logout()
    {
        $this->session->unset_userdata('is_login');
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('level');
        redirect('');
    }

}
