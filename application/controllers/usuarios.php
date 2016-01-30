<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function index() {
		$this->load->helper("form");
		$this->load->view("_template/header");
		$this->load->view("usuarios/index");
		$this->load->view("_template/footer");
	}

	public function novo(){
		$usuario = array(
			"user"=>$this->input->post("usuario"),
			"name"=>$this->input->post("nome"),
			"email"=>$this->input->post("email"),
			"pass"=>md5($this->input->post("senha"))
		);
		
		$this->load->model("usuarios_model");
		$this->usuarios_model->salvar($usuario);
		$this->load->view("_template/header");
		$this->load->view("usuarios/novo");
		$this->load->view("_template/footer");
	}
}