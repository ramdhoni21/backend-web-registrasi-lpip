<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presenter extends CI_Controller {

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
				return;
			} elseif ($this->session->userdata('level') == '3') { // Partisipant
				redirect('partisipant/');
			}
		} else {
			redirect('users/login');
		}
    }
	
	public function index()
	{
		$data['title'] = "Presenter :: Dashboard";
		$data['page_title'] = "Dashboard Presenter";
		$this->load->view('presenter/partials/head', $data);
		$this->load->view('presenter/dashboard');
		$this->load->view('presenter/partials/footer');
	}

    public function profil()
	{
		$data['title'] = "Presenter :: Profil";
		$data['page_title'] = "Profil";
		$this->load->view('presenter/partials/head', $data);
		$this->load->view('presenter/profil');
		$this->load->view('presenter/partials/footer');
	}

    public function jurnal()
	{
		$data['title'] = "Presenter :: Jurnal";
		$data['page_title'] = "Jurnal";
		$this->load->view('presenter/partials/head', $data);
		$this->load->view('presenter/jurnal');
		$this->load->view('presenter/partials/footer');
	}



}
