<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Produtos extends CI_Controller{
	
	public function index(){
		$this->load->database();
		$this->load->model("Produtos_model");
		$produtos = $this->Produtos_model->getAll();

		$dados = array("produtos"=>$produtos);
		$this->load->helper("currency");
		$this->load->view("_template/header.php");
		$this->load->view("produtos/index.php",$dados);
		$this->load->view("_template/footer.php");
	}
}