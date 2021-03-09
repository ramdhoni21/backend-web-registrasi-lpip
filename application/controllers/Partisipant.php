<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partisipant extends CI_Controller {

	public function index()
	{
		$data['title'] = "Partisipant :: Dashboard";
		$data['page_title'] = "Dashboard Partisipant";
		$this->load->view('partisipant/partials/head', $data);
		$this->load->view('partisipant/dashboard');
		$this->load->view('partisipant/partials/footer');
	}

    public function profil()
	{
		$data['title'] = "Partisipant :: Profil";
		$data['page_title'] = "Profil";
		$this->load->view('partisipant/partials/head', $data);
		$this->load->view('partisipant/profil');
		$this->load->view('partisipant/partials/footer');
	}

}