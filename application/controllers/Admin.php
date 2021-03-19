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
			} elseif ($this->session->userdata('level') == '3') { // participant
				redirect('participant/');
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
        $data['participant'] = $this->madmin->get_users_by_level_count('3');
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

			if (isset($_POST)) {
				$this->form_validation->set_rules('category', 'Category', 'trim|required', array('required' => 'Select presenter category!'));
				$this->form_validation->set_rules('affiliation', 'Affiliation', 'trim|required', array('required' => 'Enter affiliation!'));
				$this->form_validation->set_rules('telp', 'Phone', 'trim|required', array('required' => 'Enter number phone!'));
				if ($this->form_validation->run() == FALSE) {
					// echo validation_errors();
				} else {
					$data = [
						'category' => $this->input->post('category', true),
						'affiliation' => $this->input->post('affiliation', true),
						'telp' => $this->input->post('telp', true),
					];
					$query = $this->madmin->update_profil($data, $id);
					if ($query) {
						$this->session->set_flashdata('success', 'Update profil is successful.');
					} else {
						$this->session->set_flashdata('failed', 'Update profil failed!');
					}
				}
			}

			$this->session->set_userdata('back_url', current_url());
			$data['data_user'] = $this->musers->get_users_by_id($id);
			$data['title'] = "Admin :: Presenter Detail";
			$data['page_title'] = "Presenter Detail";
			$this->load->view('admin/partials/head', $data);
			$this->load->view('admin/presenter_detail');
			$this->load->view('admin/partials/footer');

		}
	}

	public function participant($id = null)
	{
		
		if ($id == null) {

            $this->session->set_userdata('last_url', current_url());
			$data['title'] = "Admin :: participant";
			$data['page_title'] = "participant";
            $data['data_participant'] = $this->madmin->get_users_by_category('3');
			$this->load->view('admin/partials/head', $data);
			$this->load->view('admin/participant');
			$this->load->view('admin/partials/footer');

		// participant detail
		} else {

			if (isset($_POST)) {
				$this->form_validation->set_rules('category', 'Category', 'trim|required', array('required' => 'Select participant category!'));
				$this->form_validation->set_rules('affiliation', 'Affiliation', 'trim|required', array('required' => 'Enter affiliation!'));
				$this->form_validation->set_rules('telp', 'Phone', 'trim|required', array('required' => 'Enter number phone!'));
				if ($this->form_validation->run() == FALSE) {
					// echo validation_errors();
				} else {
					$data = [
						'category' => $this->input->post('category', true),
						'affiliation' => $this->input->post('affiliation', true),
						'telp' => $this->input->post('telp', true),
					];
					$query = $this->madmin->update_profil($data, $id);
					if ($query) {
						$this->session->set_flashdata('success', 'Update profil is successful.');
					} else {
						$this->session->set_flashdata('failed', 'Update profil failed!');
					}
				}
			}

			$this->session->set_userdata('back_url', current_url());
			$data['data_user'] = $this->musers->get_users_by_id($id);
			$data['title'] = "Admin :: participant Detail";
			$data['page_title'] = "participant Detail";
			$this->load->view('admin/partials/head', $data);
			$this->load->view('admin/participant_detail');
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
