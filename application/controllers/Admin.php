<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
				return;
			} elseif($this->session->userdata('level') == '2') {  // Presenter
				redirect('presenter/');
			} elseif ($this->session->userdata('level') == '3') { // Partisipant
				redirect('partisipant/');
			}
		} else {
			redirect('users/login');
		}
    }

	public function index()
	{
		$data['title'] = "Admin :: Dashboard";
		$data['page_title'] = "Dashboard Admin";
        $data['presenter'] = $this->madmin->get_users_by_level_count('2');
        $data['partisipant'] = $this->madmin->get_users_by_level_count('3');
		$this->load->view('admin/partials/head', $data);
		$this->load->view('admin/dashboard');
		$this->load->view('admin/partials/footer');
	}

	public function presenter($id = null)
	{
		if ($id == null) {

            $this->session->set_userdata('last_url', current_url());
			$data['title'] = "Admin :: Presenter";
			$data['page_title'] = "Presenter";
            $data['data_presenter'] = $this->madmin->get_users_by_category('2');
			$this->load->view('admin/partials/head', $data);
			$this->load->view('admin/presenter');
			$this->load->view('admin/partials/footer');

		// presenter detail
		} else {

			$data['title'] = "Admin :: Presenter Detail";
			$data['page_title'] = "Presenter Detail";
			$this->load->view('admin/partials/head', $data);
			$this->load->view('admin/presenter_detail');
			$this->load->view('admin/partials/footer');

		}
	}

	public function partisipant($id = null)
	{
		
		if ($id == null) {

            $this->session->set_userdata('last_url', current_url());
			$data['title'] = "Admin :: Partisipant";
			$data['page_title'] = "Partisipant";
            $data['data_partisipant'] = $this->madmin->get_users_by_category('3');
			$this->load->view('admin/partials/head', $data);
			$this->load->view('admin/partisipant');
			$this->load->view('admin/partials/footer');

		// partisipant detail
		} else {

			$data['title'] = "Admin :: Partisipant Detail";
			$data['page_title'] = "Partisipant Detail";
			$this->load->view('admin/partials/head', $data);
			$this->load->view('admin/partisipant_detail');
			$this->load->view('admin/partials/footer');

		}
	}

	public function validasi($id)
	{
		$query = $this->madmin->val_user($id,'1');
		if ($query) {
			redirect($this->last_url, 'reload');
		} else {
			redirect($this->last_url, 'reload');

		}
		
	}

	public function unvalidasi($id)
	{
		$query = $this->madmin->val_user($id,'0');
		if ($query) {
			redirect($this->last_url, 'reload');
		} else {
			redirect($this->last_url, 'reload');

		}
		
	}

}
