<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$data['title'] = "Admin :: Dashboard";
		$data['page_title'] = "Dashboard";
		$this->load->view('admin/partials/head', $data);
		$this->load->view('admin/dashboard');
		$this->load->view('admin/partials/footer');
	}

	public function presenter($id = null)
	{
		if ($id == null) {

			$data['title'] = "Admin :: Presenter";
			$data['page_title'] = "Presenter";
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

			$data['title'] = "Admin :: Partisipant";
			$data['page_title'] = "Partisipant";
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

	public function tes()
	{
		$this->load->view('tes');
	}

}