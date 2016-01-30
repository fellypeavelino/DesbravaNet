
<?php
Class Produtos_model extends CI_Model {
	public function getAll(){
		return $this->db->get("produtos")->result_array();	//Todos os registros
	}
}
