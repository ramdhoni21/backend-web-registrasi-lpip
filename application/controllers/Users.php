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
                        $this->session->set_flashdata('login', 'Your account has not been validated!');
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

	// Check email user exists
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

	// Register
    public function register()
	{
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