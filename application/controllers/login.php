<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index() {
		if(!$this->session->userdata('logged')){
			$this->load->view('_template/header_clear');
			$this->load->view('login/index');
			$this->load->view('_template/footer_clear');
		}else{
			if($this->is_admin()){
				//$this->session->sess_destroy();
				///redirect("/");
				//require_once(APPPATH.'controllers/home.php'); 
    			//$oHome = new Home();
    			//$oHome->index_admin();

				$this->load->view('_template/header');
				$this->load->view('home/index_admin');
				$this->load->view('_template/footer');

				//$this->load->library('../controllers/home');
				//$this->Home->index_admin();
			}else{
				$this->load->view('_template/header');
				$this->load->view('home/index');
				$this->load->view('_template/footer');
			}
		}
		
	}

	public function logon() {
		require_once "../third_party/recaptchalib.php";			// busca a biblioteca recaptcha
		$secret = "6LcgGhcTAAAAAHXSiMR1BT4pg183Ix6UEsoCBvgw";	// sua chave secreta
		$response = null;										// resposta vazia
		$reCaptcha = new ReCaptcha($secret);					// verifique a chave secreta
		
		// se submetido, verifique a resposta
		if ($_POST["g-recaptcha-response"]) {
		$response = $reCaptcha->verifyResponse(
		        $_SERVER["REMOTE_ADDR"],
		        $_POST["g-recaptcha-response"]
		    );
		}
		
		if ($response != null && $response->success) {
			$this->load->model('Usuarios_model');
	
			$user = $this->Usuarios_model->searchByUser($this->input->post("user"));
	
			if ($user) {
				$pass = $this->input->post("pass");
				if(md5($pass) != $user['pass']){
					$this->session->set_flashdata('danger','Senha incorreta!');
				}else{
					$this->session->set_userdata('logged',$user);
				}
			}else{
				$this->session->set_flashdata('danger','Usuário não encontrado!');
			}
		}
		redirect("/");
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect("/");
	}

	public function is_admin(){
		$user = $this->session->userdata('logged');
		if($user['group_id'] == "1"){
			return true;
		}else{
			return false;
		}
	}
	
	public function getGroupName(){
		$this->load->model('Grupos_model');
		$group = $this->Grupos_model->searchById($this->input->post("group_id"));
		return $group['name'];
	}
}
