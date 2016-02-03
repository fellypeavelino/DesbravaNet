<?php

Class Usuarios_model extends CI_Model {
	private $table = "usuarios";

	public function salvar($usuario){
		$this->db->insert($this->table,$usuario);
	}


	public function searchByUser($user){
		return $this->db->get_where($this->table, array('user' => $user))->row_array();	//apenas uma linha de verdade
	}

	public function getAll(){
		return $this->db->get($this->table)->result_array();	//Todos os registros
	}

	//$query = "INSERT INTO tbl_chatberichten (chat_id, student_id, bericht) VALUES (?,?,?)";
    //$this->db->query($query, array($chat_id, $student_id, $bericht));
}
