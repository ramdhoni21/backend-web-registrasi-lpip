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
			} elseif ($this->session->userdata('level') == '3') { // participant
				redirect('participant/');
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
		if (isset($_POST)) {
            $this->form_validation->set_rules('category', 'Category', 'trim|required', array('required' => 'Select presenter category!'));
            $this->form_validation->set_rules('affiliation', 'Affiliation', 'trim|required', array('required' => 'Enter your affiliation!'));
            $this->form_validation->set_rules('telp', 'Phone', 'trim|required', array('required' => 'Enter your number phone!'));
            if ($this->form_validation->run() == FALSE) {
                // echo validation_errors();
            } else {
                $data = [
                    'category' => $this->input->post('category', true),
                    'affiliation' => $this->input->post('affiliation', true),
                    'telp' => $this->input->post('telp', true),
                ];
                $query = $this->musers->update_profil($data);
                if ($query) {
                    $this->session->set_flashdata('success', 'Update profil is successful.');
                } else {
                    $this->session->set_flashdata('failed', 'Update profil failed!');
                }
            }
        }

		$this->session->set_userdata('back_url', current_url());
		$data['data_user'] = $this->musers->get_users_by_id($this->session->userdata('id_user'));
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
