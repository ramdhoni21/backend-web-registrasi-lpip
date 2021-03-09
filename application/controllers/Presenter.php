<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Presenter extends CI_Controller {

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