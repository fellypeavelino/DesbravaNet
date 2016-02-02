<?php

Class Grupos_model extends CI_Model {
	private $table = "users_groups";
	
	public function salvar($grupo){
		$this->db->insert($table,$grupo);
	}

	public function searchByName($name){
		$this->db->where("name",$name);
		return $this->db->get($table)->row_array();	//apenas uma linha
	}

	public function getAll(){
		return $this->db->get($table)->result_array();	//Todos os registros
	}

	public function getNameById($id){
		$this->db->where("id",$id);
		return $this->db->get($table)->row_array();
	}
	//$query = "INSERT INTO tbl_chatberichten (chat_id, student_id, bericht) VALUES (?,?,?)";
    //$this->db->query($query, array($chat_id, $student_id, $bericht));
}
