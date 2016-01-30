<?php

Class Usuarios_model extends CI_Model {

	public function salvar($usuario){
		$this->db->insert("usuarios",$usuario);
	}


	public function searchByUser($user){
		$this->db->where("user",$user);
		return $this->db->get("usuarios")->row_array();	//apenas uma linha
	}

	public function getAll(){
		return $this->db->get("usuarios")->result_array();	//Todos os registros
	}

	//$query = "INSERT INTO tbl_chatberichten (chat_id, student_id, bericht) VALUES (?,?,?)";
    //$this->db->query($query, array($chat_id, $student_id, $bericht));
}
