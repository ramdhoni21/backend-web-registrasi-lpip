<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Participant extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->model('Musers','musers');
        $this->load->model('Madmin','madmin');
		$this->back_url = $this->session->userdata('back_url');
        $this->last_url = $this->session->userdata('last_url');
        $this->check_auth();
    }

	// Check auth
    public function check_auth()
    {
		if ($this->session->userdata('is_login')) {
			// Auth login level
			if ($this->session->userdata('level') == '1') {       // Admin
				redirect('Admin/');
			} elseif($this->session->userdata('level') == '2') {  // Presenter
				redirect('presenter/');
			} elseif ($this->session->userdata('level') == '3') { // Participant
				return;
			}
		} else {
			redirect('users/login');
		}
    }

	public function index()
	{
		$data['title'] = "Participant :: Dashboard";
		$data['page_title'] = "Dashboard Participant";
		$this->load->view('Participant/partials/head', $data);
		$this->load->view('Participant/dashboard');
		$this->load->view('Participant/partials/footer');
	}

    public function profil()
	{
		$data['title'] = "Participant :: Profil";
		$data['page_title'] = "Profil";
		$this->load->view('Participant/partials/head', $data);
		$this->load->view('Participant/profil');
		$this->load->view('Participant/partials/footer');
	}

}
