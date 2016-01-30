<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		$this->load->view('_template/header');
		$this->load->view('home/index');
		$this->load->view('_template/footer');
	}

	public function index_admin() {
		$this->load->view('_template/header');
		$this->load->view('home/index_admin');
		$this->load->view('_template/footer');
	}
}
